<?php

namespace Onsigbaar\Components\Tests\Commands;

use Onsigbaar\Components\Tests\BaseTestCase;

class PublishTranslationCommandTest extends BaseTestCase
{
    /**
     * @var \Illuminate\Filesystem\Filesystem
     */
    private $finder;
    /**
     * @var string
     */
    private $modulePath;

    public function setUp()
    {
        parent::setUp();
        $this->modulePath = base_path('modules/Blog');
        $this->finder = $this->app['files'];
        $this->artisan('component:make', ['name' => ['Blog']]);
    }

    public function tearDown()
    {
        $this->finder->deleteDirectory($this->modulePath);
        parent::tearDown();
    }

    /** @test */
    public function it_published_module_translations()
    {
        $this->artisan('component:publish-translation', ['module' => 'Blog']);

        $this->assertTrue(is_dir(base_path('resources/lang/blog')));
    }
}
