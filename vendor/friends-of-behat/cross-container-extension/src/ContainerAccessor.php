<?php

declare(strict_types=1);

/*
 * This file is part of the CrossContainerExtension package.
 *
 * (c) Kamil Kokot <kamil@kokot.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FriendsOfBehat\CrossContainerExtension;

interface ContainerAccessor
{
    /**
     * @param string $id
     *
     * @return object
     */
    public function getService(string $id);

    /**
     * @return array
     */
    public function getParameters(): array;
}
