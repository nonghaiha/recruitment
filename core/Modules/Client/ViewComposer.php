<?php
namespace Core\Modules\Client;

use Core\Modules\Admin\Services\Contracts\CategoryServiceContract;
use Core\Modules\Admin\Services\Contracts\LocationServiceContract;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ViewComposer
{
    protected $global = [];
    protected $categoryService;
    protected $locationService;
    public function __construct
    (
        CategoryServiceContract $categoryService,
        LocationServiceContract $locationService
    )
    {
        $this->categoryService = $categoryService;
        $this->locationService = $locationService;
    }

    public function compose(View $view)
    {
        $view->with('categories',$this->categoryService->getAll());
        $view->with('locations',$this->locationService->getAll());
    }
}
