<?php
namespace Core\Modules\Client\Controllers;

use App\Http\Controllers\Controller;
use Core\Modules\Admin\Services\Contracts\CategoryServiceContract;

class HomeController extends Controller
{
    protected $categoryService;
    public function __construct(CategoryServiceContract $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $categories = $this->categoryService->getAll();
        return view('Client::index',['categories' => $categories]);
    }
}
