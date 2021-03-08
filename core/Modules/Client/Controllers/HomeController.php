<?php
namespace Core\Modules\Client\Controllers;

use App\Http\Controllers\Controller;
use Core\Modules\Admin\Services\Contracts\CategoryServiceContract;
use Core\Modules\Admin\Services\Contracts\JobServiceContract;
use Core\Modules\Admin\Services\Contracts\NewsServiceContract;

class HomeController extends Controller
{
    protected $categoryService;
    protected $jobService;
    protected $newsService;
    public function __construct
    (
        CategoryServiceContract $categoryService,
        JobServiceContract $jobService,
        NewsServiceContract $newsService
    )
    {
        $this->categoryService = $categoryService;
        $this->jobService = $jobService;
        $this->newsService = $newsService;
    }

    public function index()
    {
        $jobDesc = $this->jobService->getAll();
        $categories = $this->categoryService->getAllForClient();
        $news = $this->newsService->getAll();
        return view('Client::index',['jobDesc' => $jobDesc,'categories' => $categories,'news' => $news]);
    }

    public function listQuestion()
    {
        return view('Client::list-question');
    }

    public function aboutUs()
    {
        return view('Client::about-us');
    }
}
