<?php

namespace Onsigbaar\Components\Lumen;

use Onsigbaar\Components\FileRepository;

class LumenFileRepository extends FileRepository
{
    /**
     * {@inheritdoc}
     */
    protected function createModule(...$args)
    {
        return new Module(...$args);
    }
}
