<?php
namespace Core\Modules\Admin\Controllers\Admin;

use App\Http\Controllers\Controller;
use Core\Modules\Admin\Requests\CreateJobRequest;
use Core\Modules\Admin\Requests\UpdateJobRequest;
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

    public function index()
    {
        $data = $this->jobService->getAll();
        return view('Admin::job.index',['data' => $data]);
    }

    public function create()
    {
        $data = $this->categoryService->getAll();
        return view('Admin::job.create',['categories' => $data]);
    }

    public function store(CreateJobRequest $request)
    {
        $data = $this->jobService->store($request);
        if ($data){
            return redirect()->route('admin.job.index');
        }
        return false;
    }

    public function edit($id)
    {
        $data = $this->jobService->find($id);
        if ($data){
            return view('Admin::job.edit',['data' => $data]);
        }
        return false;
    }

    public function update(UpdateJobRequest $request)
    {
        $data = $this->jobService->update($request);
        if ($data){
            return redirect()->route('admin.job.index');
        }
        return false;
    }

    public function delete($id)
    {
        $data = $this->jobService->delete($id);
        if ($data){
            return redirect()->route('admin.job.index');
        }
        return false;
    }

    public function search(Request $request)
    {
        $data = $this->jobService->search($request->key);
        return $data;
    }

}
