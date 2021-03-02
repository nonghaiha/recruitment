<?php
namespace Core\Modules\Admin\Controllers\Admin;

use App\Http\Controllers\Controller;
use Core\Modules\Admin\Requests\CreateCategoryRequest;
use Core\Modules\Admin\Services\Contracts\CategoryServiceContract;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    protected $categoryService;
    public function __construct
    (
        CategoryServiceContract $categoryService
    )
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $data = $this->categoryService->getAll();
        return view('Admin::category.index',['data' => $data]);
    }

    public function create()
    {
        return view('Admin::category.create');
    }

    public function store(CreateCategoryRequest $request)
    {
        if($request->name){
            $data = $this->categoryService->store($request);
            if($data){
                return redirect()->route('admin.category.index');
            }
        }
        return false;
    }

    public function edit(Request $request)
    {
        if ($request->id) {
            $data = $this->categoryService->find($request->id);
            return view('Admin::category.edit',['data' => $data]);
        }
        return false;
    }

    public function update(CreateCategoryRequest $request)
    {
        $data = $this->categoryService->update($request);
        if ($data){
            return redirect()->route('admin.category.index');
        }
        return false;
    }
}
