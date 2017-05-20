<?php

namespace Onsigbaar\Components\Providers;

use Illuminate\Support\ServiceProvider;
use Onsigbaar\Components\Commands\MakeCommandCommand;
use Onsigbaar\Components\Commands\MakeControllerCommand;
use Onsigbaar\Components\Commands\DisableCommand;
use Onsigbaar\Components\Commands\DumpCommand;
use Onsigbaar\Components\Commands\EnableCommand;
use Onsigbaar\Components\Commands\GenerateEventCommand;
use Onsigbaar\Components\Commands\GenerateJobCommand;
use Onsigbaar\Components\Commands\GenerateListenerCommand;
use Onsigbaar\Components\Commands\GenerateMailCommand;
use Onsigbaar\Components\Commands\GenerateMiddlewareCommand;
use Onsigbaar\Components\Commands\GenerateNotificationCommand;
use Onsigbaar\Components\Commands\GenerateProviderCommand;
use Onsigbaar\Components\Commands\GenerateRouteProviderCommand;
use Onsigbaar\Components\Commands\InstallCommand;
use Onsigbaar\Components\Commands\ListCommand;
use Onsigbaar\Components\Commands\MakeCommand;
use Onsigbaar\Components\Commands\MakeRequestCommand;
use Onsigbaar\Components\Commands\MigrateCommand;
use Onsigbaar\Components\Commands\MigrateRefreshCommand;
use Onsigbaar\Components\Commands\MigrateResetCommand;
use Onsigbaar\Components\Commands\MigrateRollbackCommand;
use Onsigbaar\Components\Commands\MigrationCommand;
use Onsigbaar\Components\Commands\ModelCommand;
use Onsigbaar\Components\Commands\PublishAssetCommand;
use Onsigbaar\Components\Commands\PublishConfigurationCommand;
use Onsigbaar\Components\Commands\PublishMigrationCommand;
use Onsigbaar\Components\Commands\PublishTranslationCommand;
use Onsigbaar\Components\Commands\SeedCommand;
use Onsigbaar\Components\Commands\SeedMakeCommand;
use Onsigbaar\Components\Commands\SetupCommand;
use Onsigbaar\Components\Commands\UpdateCommand;
use Onsigbaar\Components\Commands\UseCommand;
use Onsigbaar\Components\Commands\PublishSeedCommand;

class ConsoleServiceProvider extends ServiceProvider
{
    protected $defer = false;

    /**
     * The available commands
     *
     * @var array
     */
    protected $commands
        = [
            MakeCommand::class,
            MakeCommandCommand::class,
            MakeControllerCommand::class,
            DisableCommand::class,
            EnableCommand::class,
            GenerateEventCommand::class,
            GenerateListenerCommand::class,
            GenerateMiddlewareCommand::class,
            GenerateProviderCommand::class,
            GenerateRouteProviderCommand::class,
            InstallCommand::class,
            ListCommand::class,
            MigrateCommand::class,
            MigrateRefreshCommand::class,
            MigrateResetCommand::class,
            MigrateRollbackCommand::class,
            MigrationCommand::class,
            ModelCommand::class,
            PublishAssetCommand::class,
            PublishMigrationCommand::class,
            PublishTranslationCommand::class,
            SeedCommand::class,
            SeedMakeCommand::class,
            SetupCommand::class,
            UpdateCommand::class,
            UseCommand::class,
            DumpCommand::class,
            MakeRequestCommand::class,
            PublishConfigurationCommand::class,
            GenerateJobCommand::class,
            GenerateMailCommand::class,
            GenerateNotificationCommand::class,
            PublishSeedCommand::class,
        ];

    /**
     * Register the commands.
     */
    public function register()
    {
        $this->commands($this->commands);
    }

    /**
     * @return array
     */
    public function provides()
    {
        $provides = $this->commands;

        return $provides;
    }
}
