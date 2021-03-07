<?php
namespace Core\Modules;

use Core\Modules\Admin\Repositories\CandidateRepository;
use Core\Modules\Admin\Repositories\CategoryRepository;
use Core\Modules\Admin\Repositories\Contracts\CandidateRepositoryContract;
use Core\Modules\Admin\Repositories\Contracts\CategoryRepositoryContract;
use Core\Modules\Admin\Repositories\Contracts\JobLocationRepositoryContract;
use Core\Modules\Admin\Repositories\Contracts\JobRepositoryContract;
use Core\Modules\Admin\Repositories\Contracts\LocationRepositoryContract;
use Core\Modules\Admin\Repositories\Contracts\NewsRepositoryContract;
use Core\Modules\Admin\Repositories\JobLocationRepository;
use Core\Modules\Admin\Repositories\JobRepository;
use Core\Modules\Admin\Repositories\LocationRepository;
use Core\Modules\Admin\Repositories\NewsRepository;
use Core\Modules\Admin\Services\CandidateService;
use Core\Modules\Admin\Services\CategoryService;
use Core\Modules\Admin\Services\Contracts\CandidateServiceContract;
use Core\Modules\Admin\Services\Contracts\CategoryServiceContract as ContractsCategoryServiceContract;
use Core\Modules\Admin\Services\Contracts\JobServiceContract;
use Core\Modules\Admin\Services\Contracts\LocationServiceContract;
use Core\Modules\Admin\Services\Contracts\NewsServiceContract;
use Core\Modules\Admin\Services\JobService;
use Core\Modules\Admin\Services\LocationService;
use Core\Modules\Admin\Services\NewsService;
use Core\Modules\Client\ViewComposer;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider
{
    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'cms.guest' => RedirectIfAuthenticated::class,
    ];
    /**
     * Bootstrap services.
     *
     * @param \Illuminate\Routing\Router $router
     *
     * @return void
     */
    public function boot(Router $router)
    {
        // MODULE MIDDLEWARE REGISTER
        foreach ($this->routeMiddleware as $name => $class) {
            $router->aliasMiddleware($name, $class);
        }
        //MODULE CONFIG ROUTE AND VIEW
        $listModule = array_map('basename', \File::directories(__DIR__));
        foreach ($listModule as $module) {
            //Route
            if (file_exists($pathFileRoute = __DIR__ .'/'.$module.'/routes.php')) {
                $this->loadRoutesFrom($pathFileRoute);
            }
            //Views
            if (is_dir($pathFolView = __DIR__ .'/'.$module.'/Views')) {
                $this->loadViewsFrom($pathFolView, $module);
            }
        }

        view()->composer('*',ViewComposer::class);



    }
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //Category
        $this->app->bind(CategoryRepositoryContract::class,CategoryRepository::class);
        $this->app->bind(ContractsCategoryServiceContract::class,CategoryService::class);

        //News
        $this->app->bind(NewsRepositoryContract::class,NewsRepository::class);
        $this->app->bind(NewsServiceContract::class,NewsService::class);

        //Job
        $this->app->bind(JobRepositoryContract::class,JobRepository::class);
        $this->app->bind(JobServiceContract::class,JobService::class);

        //Location
        $this->app->bind(LocationRepositoryContract::class,LocationRepository::class);
        $this->app->bind(LocationServiceContract::class,LocationService::class);

        //JobLocation
        $this->app->bind(JobLocationRepositoryContract::class,JobLocationRepository::class);

        //Candidate
        $this->app->bind(CandidateRepositoryContract::class,CandidateRepository::class);
        $this->app->bind(CandidateServiceContract::class,CandidateService::class);
    }

}
