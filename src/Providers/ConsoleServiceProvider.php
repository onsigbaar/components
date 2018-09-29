<?php

namespace Onsigbaar\Components\Providers;

use Illuminate\Support\ServiceProvider;
use Onsigbaar\Components\Commands\CommandMakeCommand;
use Onsigbaar\Components\Commands\ControllerMakeCommand;
use Onsigbaar\Components\Commands\DisableCommand;
use Onsigbaar\Components\Commands\DumpCommand;
use Onsigbaar\Components\Commands\EnableCommand;
use Onsigbaar\Components\Commands\EventMakeCommand;
use Onsigbaar\Components\Commands\FactoryMakeCommand;
use Onsigbaar\Components\Commands\InstallCommand;
use Onsigbaar\Components\Commands\JobMakeCommand;
use Onsigbaar\Components\Commands\ListCommand;
use Onsigbaar\Components\Commands\ListenerMakeCommand;
use Onsigbaar\Components\Commands\MailMakeCommand;
use Onsigbaar\Components\Commands\MiddlewareMakeCommand;
use Onsigbaar\Components\Commands\MigrateCommand;
use Onsigbaar\Components\Commands\MigrateRefreshCommand;
use Onsigbaar\Components\Commands\MigrateResetCommand;
use Onsigbaar\Components\Commands\MigrateRollbackCommand;
use Onsigbaar\Components\Commands\MigrateStatusCommand;
use Onsigbaar\Components\Commands\MigrationMakeCommand;
use Onsigbaar\Components\Commands\ModelMakeCommand;
use Onsigbaar\Components\Commands\ModuleMakeCommand;
use Onsigbaar\Components\Commands\NotificationMakeCommand;
use Onsigbaar\Components\Commands\PolicyMakeCommand;
use Onsigbaar\Components\Commands\ProviderMakeCommand;
use Onsigbaar\Components\Commands\PublishCommand;
use Onsigbaar\Components\Commands\PublishConfigurationCommand;
use Onsigbaar\Components\Commands\PublishMigrationCommand;
use Onsigbaar\Components\Commands\PublishTranslationCommand;
use Onsigbaar\Components\Commands\RequestMakeCommand;
use Onsigbaar\Components\Commands\ResourceMakeCommand;
use Onsigbaar\Components\Commands\RouteProviderMakeCommand;
use Onsigbaar\Components\Commands\RuleMakeCommand;
use Onsigbaar\Components\Commands\SeedCommand;
use Onsigbaar\Components\Commands\SeedMakeCommand;
use Onsigbaar\Components\Commands\SetupCommand;
use Onsigbaar\Components\Commands\TestMakeCommand;
use Onsigbaar\Components\Commands\UnUseCommand;
use Onsigbaar\Components\Commands\UpdateCommand;
use Onsigbaar\Components\Commands\UseCommand;

class ConsoleServiceProvider extends ServiceProvider
{
    protected $defer = false;

    /**
     * The available commands
     *
     * @var array
     */
    protected $commands = [
        CommandMakeCommand::class,
        ControllerMakeCommand::class,
        DisableCommand::class,
        DumpCommand::class,
        EnableCommand::class,
        EventMakeCommand::class,
        JobMakeCommand::class,
        ListenerMakeCommand::class,
        MailMakeCommand::class,
        MiddlewareMakeCommand::class,
        NotificationMakeCommand::class,
        ProviderMakeCommand::class,
        RouteProviderMakeCommand::class,
        InstallCommand::class,
        ListCommand::class,
        ModuleMakeCommand::class,
        FactoryMakeCommand::class,
        PolicyMakeCommand::class,
        RequestMakeCommand::class,
        RuleMakeCommand::class,
        MigrateCommand::class,
        MigrateRefreshCommand::class,
        MigrateResetCommand::class,
        MigrateRollbackCommand::class,
        MigrateStatusCommand::class,
        MigrationMakeCommand::class,
        ModelMakeCommand::class,
        PublishCommand::class,
        PublishConfigurationCommand::class,
        PublishMigrationCommand::class,
        PublishTranslationCommand::class,
        SeedCommand::class,
        SeedMakeCommand::class,
        SetupCommand::class,
        UnUseCommand::class,
        UpdateCommand::class,
        UseCommand::class,
        ResourceMakeCommand::class,
        TestMakeCommand::class,
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
