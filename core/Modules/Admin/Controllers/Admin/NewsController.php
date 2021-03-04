<?php

namespace Core\Modules\Admin\Controllers\Admin;

use App\Http\Controllers\Controller;
use Core\Modules\Admin\Requests\CreateNewsRequest;
use Core\Modules\Admin\Services\Contracts\NewsServiceContract;
use Illuminate\Http\Request;

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
        $data = $this->newService->getAll();
        return view('Admin::news.index', ['data' => $data]);
    }

    public function create()
    {
        return view('Admin::news.create');
    }

    public function store(CreateNewsRequest $request)
    {
        if ($request->title) {
            $this->newService->store($request);
            return redirect()->route('admin.news.index');
        }
        return false;
    }

    public function edit($id)
    {
        $data = $this->newService->find($id);
        return view('Admin::news.edit', ['data' => $data]);
    }

    public function update(CreateNewsRequest $request)
    {
        if ($request->title) {
            $this->newService->update($request);
            return redirect()->route('admin.news.index');
        }
        return false;
    }

    public function delete(Request $request)
    {
        if ($request->id) {
            if ($this->newService->delete($request->id)) {
                return redirect()->route('admin.news.index');
            }
        }
        return false;
    }

    public function search(Request $request)
    {
        $key = $request->data;
        $data = $this->newService->search($key);
        return $data;
    }
}
