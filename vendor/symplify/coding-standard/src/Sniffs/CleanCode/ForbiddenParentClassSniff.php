<?php declare(strict_types=1);

namespace Symplify\CodingStandard\Sniffs\CleanCode;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use Symplify\TokenRunner\Wrapper\SnifferWrapper\ClassWrapperFactory;
use function Safe\sprintf;

final class ForbiddenParentClassSniff implements Sniff
{
    /**
     * @var string[]
     */
    public $forbiddenParentClasses = [];

    /**
     * @var ClassWrapperFactory
     */
    private $classWrapperFactory;

    public function __construct(ClassWrapperFactory $classWrapperFactory)
    {
        $this->classWrapperFactory = $classWrapperFactory;
    }

    /**
     * @return int[]
     */
    public function register(): array
    {
        return [T_CLASS];
    }

    /**
     * @param int $position
     */
    public function process(File $file, $position): void
    {
        if (empty($this->forbiddenParentClasses)) {
            return;
        }

        $classWrapper = $this->classWrapperFactory->createFromFirstClassInFile($file);

        // no class
        if ($classWrapper === null) {
            return;
        }

        // anonymous class only
        $className = $classWrapper->getClassName();
        if ($className === null) {
            return;
        }

        $parentClassName = $classWrapper->getParentClassName();
        // no parent class
        if ($parentClassName === null) {
            return;
        }

        if ($this->shouldSkip($parentClassName)) {
            return;
        }

        $file->addError(
            sprintf('Class "%s" cannot be parent class. Use composition over inheritance instead.', $parentClassName),
            $position,
            self::class
        );
    }

    private function shouldSkip(string $parentClassName): bool
    {
        foreach ($this->forbiddenParentClasses as $forbiddenParentClass) {
            if ($parentClassName === $forbiddenParentClass) {
                return false;
            }

            if (fnmatch($forbiddenParentClass, $parentClassName)) {
                return false;
            }
        }

        return true;
    }
}
