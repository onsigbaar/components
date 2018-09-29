<?php

namespace Onsigbaar\Components\Tests;

use Onsigbaar\Components\Contracts\RepositoryInterface;
use Onsigbaar\Components\Laravel\LaravelFileRepository;

class ContractsServiceProviderTest extends BaseTestCase
{
    /** @test */
    public function it_binds_repository_interface_with_implementation()
    {
        $this->assertInstanceOf(LaravelFileRepository::class, app(RepositoryInterface::class));
    }
}
