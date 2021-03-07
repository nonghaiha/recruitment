<?php
namespace Core\Modules\Client;

use Core\Modules\Admin\Services\Contracts\CategoryServiceContract;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ViewComposer
{
    protected $global = [];
    protected $categoryService;
    public function __construct(CategoryServiceContract $categoryService)
    {
        $this->categoryService = $categoryService;
        $categories = $this->categoryService->getAll();
    }

    public function compose(View $view)
    {
        $view->with('categories',$this->categoryService->getAll());
    }
}
