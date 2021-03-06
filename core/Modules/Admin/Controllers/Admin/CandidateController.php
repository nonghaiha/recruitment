<?php
namespace Core\Modules\Admin\Controllers\Admin;

use App\Http\Controllers\Controller;
use Core\Modules\Admin\Services\Contracts\CandidateServiceContract;

class CandidateController extends Controller
{
    protected $candidateService;
    public function __construct
    (
        CandidateServiceContract $candidateService
    )
    {
        $this->candidateService = $candidateService;
    }

    public function index()
    {
        $data = $this->candidateService->getAll();
        return view('Admin::candidate.index',['data' => $data]);
    }

    public function detail($id)
    {
        $data = $this->candidateService->find($id);
        return view('Admin::candidate.detail',['data' => $data]);
    }
}
