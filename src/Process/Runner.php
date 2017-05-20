<?php

namespace Onsigbaar\Components\Process;

use Onsigbaar\Components\Contracts\RunableInterface;
use Onsigbaar\Components\Repository;

class Runner implements RunableInterface
{
    /**
     * The component instance.
     *
     * @var \Onsigbaar\Components\Repository
     */
    protected $component;

    /**
     * The constructor.
     *
     * @param \Onsigbaar\Components\Repository $component
     */
    public function __construct(Repository $component)
    {
        $this->component = $component;
    }


    /**
     * Run the given command.
     *
     * @param string $command
     */
    public function run($command)
    {
        passthru($command);
    }
}
