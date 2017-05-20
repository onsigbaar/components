<?php

namespace Onsigbaar\Components\Providers;

use Illuminate\Support\ServiceProvider;
use Onsigbaar\Components\Contracts\RepositoryInterface;
use Onsigbaar\Components\Repository;

class ContractsServiceProvider extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, Repository::class);
    }
}
