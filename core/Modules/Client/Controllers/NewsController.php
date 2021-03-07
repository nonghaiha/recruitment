<?php
namespace Core\Modules\Client\Controllers;

use App\Http\Controllers\Controller;
use Core\Modules\Admin\Services\Contracts\NewsServiceContract;

class NewsController extends Controller
{

    protected $newService;
    public function __construct
    (
        NewsServiceContract $newService
    )
    {
        $this->newService = $newService;
    }

    public function index()
    {
        $data = $this->newService->pagination();
        return view('Client::news.index',[
            'news' => $data
        ]);
    }

    public function detail($id)
    {
        $data = $this->newService->find($id);
        return view('Client::news.detail',['news' => $data]);
    }
}
