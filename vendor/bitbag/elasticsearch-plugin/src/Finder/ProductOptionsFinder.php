<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on mikolaj.krol@bitbag.pl.
 */

declare(strict_types=1);

namespace BitBag\SyliusElasticsearchPlugin\Finder;

use BitBag\SyliusElasticsearchPlugin\QueryBuilder\QueryBuilderInterface;
use FOS\ElasticaBundle\Finder\FinderInterface;
use Sylius\Component\Core\Model\TaxonInterface;

final class ProductOptionsFinder implements ProductOptionsFinderInterface
{
    /**
     * @var FinderInterface
     */
    private $optionsFinder;

    /**
     * @var QueryBuilderInterface
     */
    private $productOptionsByTaxonQueryBuilder;

    /**
     * @var string
     */
    private $taxonsProperty;

    /**
     * @param FinderInterface $optionsFinder
     * @param QueryBuilderInterface $productOptionsByTaxonQueryBuilder
     * @param string $taxonsProperty
     */
    public function __construct(
        FinderInterface $optionsFinder,
        QueryBuilderInterface $productOptionsByTaxonQueryBuilder,
        string $taxonsProperty
    ) {
        $this->optionsFinder = $optionsFinder;
        $this->productOptionsByTaxonQueryBuilder = $productOptionsByTaxonQueryBuilder;
        $this->taxonsProperty = $taxonsProperty;
    }

    /**
     * {@inheritdoc}
     */
    public function findByTaxon(TaxonInterface $taxon): ?array
    {
        $data = [];
        $data[$this->taxonsProperty] = strtolower($taxon->getCode());

        $query = $this->productOptionsByTaxonQueryBuilder->buildQuery($data);
        $options = $this->optionsFinder->find($query);

        return $options;
    }
}
