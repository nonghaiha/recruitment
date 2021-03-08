<?php
namespace Core;

use Core\Modules\Admin\Commands\CmsSetupCommand;
use Core\Modules\CoreServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider as SupportServiceProvider;
use File;
use Illuminate\Routing\Router;

Class ServiceProvider extends SupportServiceProvider
{
    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [];

    /**
     * Bootstrap services.
     *
     * @param \Illuminate\Routing\Router $router
     *
     * @return void
     */
    public function boot(Router $router)
    {
        // SPECIFIED KEY WAS TOO LONG ERROR OLD MYSQL SERVER
        Schema::defaultStringLength(191);

        // CORE HELPER AUTOLOAD
        if (file_exists(__DIR__ . '/helpers.php'))
            include __DIR__ . '/helpers.php';

        // CMS
        $modulesDIR = __DIR__ . '/Modules';
        $modules = array_map('basename', File::directories($modulesDIR));
        foreach ($modules as $module) {

            $migrationPath = $modulesDIR . '/' . $module . '/Database/Migrations';
            $configPath = $modulesDIR . '/' . $module . '/Config';


            // MODULE HELPER AUTOLOAD
            if (file_exists($modulesDIR . '/helpers.php'))
                include $modulesDIR . '/helpers.php';


            // LOAD MODULES MIGRATION
            if (is_dir($migrationPath))
                $this->loadMigrationsFrom($migrationPath);

            // LOAD MODULES CONFIG (WILL BE OVERRIDE LARAVEL CONFIG)
            if (is_dir($configPath)) {
                $configFiles = scandir($configPath);
                foreach ($configFiles as $config) {
                    if (pathinfo($config, PATHINFO_EXTENSION) === 'php') {
                        $key  = basename($config, '.php');
                        $path = $configPath . '/' . $config;

                        if (!$this->app->runningInConsole()) {
                            if (!$this->app->configurationIsCached()) {
                                $this->app['config']->set($key, require $path);
                            }
                        } else {
                            if (\Request::server('argv')[1] === 'config:cache') {
                                $this->app['config']->set($key, require $path);
                            }
                        }
                    }
                }
            }
        }

        // CMS MIDDLEWARE REGISTER
        foreach($this->routeMiddleware as $name => $class) {
            $router->aliasMiddleware($name, $class);
        }

        //CMS COMMAND REGISTER
        if($this->app->runningInConsole()){
            $this->commands([
                CmsSetupCommand::class
            ]);
        }

    }

    public function register()
    {
        $this->app->register(CoreServiceProvider::class);

    }
}
