<?php
namespace Core\Modules\Client\Controllers;

use App\Http\Controllers\Controller;
use Core\Modules\Admin\Requests\ApplyJobRequest;
use Core\Modules\Admin\Services\Contracts\CandidateServiceContract;
use Core\Modules\Admin\Services\Contracts\CategoryServiceContract;
use Core\Modules\Admin\Services\Contracts\JobServiceContract;
use Illuminate\Http\Request;

class JobController extends Controller
{
    protected $categoryService;
    protected $jobService;
    protected $candidateService;
    public function __construct
    (
        CategoryServiceContract $categoryService,
        JobServiceContract $jobService,
        CandidateServiceContract $candidateService
    )
    {
        $this->categoryService = $categoryService;
        $this->jobService = $jobService;
        $this->candidateService = $candidateService;
    }

    public function search(Request $request)
    {
        if ($request->category || $request->location) {
            $data = $this->jobService->findByKeyWord($request);
            return view('Client::job.search',['data' => $data]);
        }
        return false;
    }

    public function detail($id)
    {
        $data = $this->jobService->find($id);
        return view('Client::job.detail',['data' => $data]);
    }

    public function apply(ApplyJobRequest $request)
    {
        $data = $this->candidateService->store($request);
        if ($data){
            return redirect()->route('client.home');
        }
        return false;
    }
}
