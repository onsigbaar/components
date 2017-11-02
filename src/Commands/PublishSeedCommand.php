<?php

namespace Onsigbaar\Components\Commands;

use Illuminate\Console\Command as ComponentCommand;
use Onsigbaar\Components\Migrations\Seeder;
use Onsigbaar\Components\Publishing\SeedPublisher;
use Symfony\Component\Console\Input\InputArgument;

class PublishSeedCommand extends ComponentCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'apic:publish-seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Publish a component's seeds to the application";

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if ($name = $this->argument('component')) {
            $component = $this->laravel['components']->findOrFail($name);

            $this->publish($component);

            return;
        }

        foreach ($this->laravel['components']->enabled() as $component) {
            $this->publish($component);
        }
    }

    /**
     * Publish migration for the specified component.
     *
     * @param \Onsigbaar\Components\Component $component
     */
    public function publish($component)
    {
        with(new SeedPublisher(new Seeder($component)))
            ->setRepository($this->laravel['components'])
            ->setConsole($this)
            ->publish();
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['component', InputArgument::OPTIONAL, 'The name of component being used.'],
        ];
    }
}
