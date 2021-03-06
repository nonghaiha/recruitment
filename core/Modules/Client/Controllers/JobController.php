<?php
namespace Core\Modules\Client\Controllers;

use App\Http\Controllers\Controller;
use Core\Modules\Admin\Services\Contracts\CategoryServiceContract;
use Core\Modules\Admin\Services\Contracts\JobServiceContract;
use Illuminate\Http\Request;

class JobController extends Controller
{
    protected $categoryService;
    protected $jobService;
    public function __construct
    (
        CategoryServiceContract $categoryService,
        JobServiceContract $jobService
    )
    {
        $this->categoryService = $categoryService;
        $this->jobService = $jobService;
    }

    public function search(Request $request)
    {
        if ($request->search) {
            $data = $this->categoryService->find($request->search);
            if ($data){
                return view('Client::job.search',['data' => $data]);
            }
        }
        return false;
    }
}
