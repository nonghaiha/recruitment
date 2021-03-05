<?php
namespace Core\Modules\Admin\Controllers\Admin;

use App\Http\Controllers\Controller;
use Core\Modules\Admin\Requests\CreateLocationRequest;
use Core\Modules\Admin\Requests\UpdateLocationRequest;
use Core\Modules\Admin\Services\Contracts\LocationServiceContract;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    protected $locationService;
    public function __construct
    (
        LocationServiceContract $locationService
    )
    {
        $this->locationService = $locationService;
    }

    public function index()
    {
        $data = $this->locationService->getAll();
        return view('Admin::location.index',['data' => $data]);
    }

    public function create()
    {
        $countries = config('config.countries');
        return view('Admin::location.create',['countries' => $countries]);
    }

    public function store(CreateLocationRequest $request)
    {
        if ($request){
            $data = $this->locationService->store($request->all());
            return redirect()->route('admin.location.index');
        }
        return false;
    }

    public function edit($id)
    {
        $data = $this->locationService->find($id);
        return view('Admin::location.edit',['data' => $data]);
    }

    public function update(UpdateLocationRequest $request)
    {
        $data = $this->locationService->update($request);
        if ($data){
            return redirect()->route('admin.location.index');
        }
        return false;
    }

    public function delete($id)
    {
        $data = $this->locationService->delete($id);
        if ($data){
            return redirect()->route('admin.location.index');
        }
        return false;
    }

    public function search(Request $request)
    {
        return $this->locationService->search($request->data);
    }
}
