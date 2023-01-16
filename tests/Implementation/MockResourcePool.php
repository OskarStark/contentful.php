<?php

/**
 * This file is part of the contentful/contentful package.
 *
 * @copyright 2015-2023 Contentful GmbH
 * @license   MIT
 */

declare(strict_types=1);

namespace Contentful\Tests\Delivery\Implementation;

use Contentful\Core\Resource\ResourceInterface;
use Contentful\Core\Resource\ResourcePoolInterface;

class MockResourcePool implements ResourcePoolInterface
{
    /**
     * {@inheritdoc}
     */
    public function save(ResourceInterface $resource): bool
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function get(string $type, string $id, array $options = []): ResourceInterface
    {
        throw new \OutOfBoundsException();
    }

    /**
     * {@inheritdoc}
     */
    public function has(string $type, string $id, array $options = []): bool
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function generateKey(string $type, string $id, array $options = []): string
    {
        return '';
    }
}
