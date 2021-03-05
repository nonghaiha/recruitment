<?php
namespace Core\Modules\Admin\Controllers\Admin;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade as PDF;
use Core\Modules\Admin\Services\Contracts\JobServiceContract;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    protected $jobService;
    public function __construct
    (
        JobServiceContract $jobService
    )
    {
        $this->jobService = $jobService;
    }

    public function getDocument($id)
    {
        $data = $this->jobService->find($id);
        $pdf = PDF::loadView('Admin::job.pdf',$data);
        return $pdf->download(str_replace(' ','_',$data['title']).'.pdf');
    }
}
