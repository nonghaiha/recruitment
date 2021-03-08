<?php
namespace Core\Modules\Admin\Services;

use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Core\Modules\Admin\Repositories\Contracts\CategoryRepositoryContract;
use Core\Modules\Admin\Repositories\Contracts\JobLocationRepositoryContract;
use Core\Modules\Admin\Repositories\Contracts\JobRepositoryContract;
use Core\Modules\Admin\Services\Contracts\JobServiceContract;
use Illuminate\Support\Facades\Storage;

class JobService implements JobServiceContract
{
    protected $jobRepository;
    protected $jobLocationRepository;
    protected $categoryRepository;
    public function __construct
    (
        JobRepositoryContract $jobRepository,
        JobLocationRepositoryContract $jobLocationRepository,
        CategoryRepositoryContract $categoryRepository
    )
    {
        $this->jobRepository = $jobRepository;
        $this->jobLocationRepository = $jobLocationRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
        return $this->jobRepository->getAll();
    }

    public function find($id)
    {
        // TODO: Implement find() method.
        return $this->jobRepository->find($id);
    }

    public function findByCategoryID($id)
    {
        // TODO: Implement findByCategoryID() method.
        return $this->jobRepository->findByCategoryID($id);
    }

    public function store($request)
    {
        // TODO: Implement store() method.
        $data = $request->all();
        if (auth()->user()) {
            $data['author_id'] = auth()->user()->id;

            if ($data['salary'] == null || $data['salary'] == 0) {
                $data['salary'] = 'Deal';
            }

            if ($data['applied_at'] == null) {
                $data['applied_at'] = Carbon::now();
            }else{
                $data['applied_at'] = Carbon::parse($data['applied_at'])->format('Y-m-d');
            }

            $data['ended_at'] = Carbon::parse($data['ended_at'])->format('Y-m-d');
            if (isset($request->jd)) {
                $fileName = $request->jd;
                $path = $data['title'];
                $file = $request->file('jd');
                $fileExtension = $request->file('jd')->getClientOriginalExtension();
                $file->move(storage_path('app/public/admin/pdf/'), str_replace(' ', '_', $data['title'] . '.pdf'));
                $data['jd'] = str_replace(' ', '_', $data['title'] . '.pdf');
            }
            $dataJob = $this->jobRepository->store($data);
            $jobLocation['job_id'] = $dataJob['id'];
            $jobLocation['location_id'] = $data['branch_location'];
            $this->jobLocationRepository->store($jobLocation);
            return true;
        }
        return false;
    }

    public function update($request)
    {
        // TODO: Implement update() method.
        if ($request){
            if (auth()->user()){
                $data = $request->all();
                $data['author_id'] = auth()->user()->id;
                unset($data['_token']);
                unset($data['_method']);
                if ($data['salary'] == null || $data['salary'] == 0){
                    $data['salary'] = 'Deal';
                }

                $data['ended_at'] = Carbon::parse($data['ended_at'])->format('Y-m-d');
                $data['applied_at'] = Carbon::parse($data['applied_at'])->format('Y-m-d');
                if (isset($request->jd)){
                    $fileName = $request->jd;
                    $path = $data['title'];
                    $file = $request->file('jd');
                    $fileExtension = $request->file('jd')->getClientOriginalExtension();
                    $file->move(storage_path('app/public/admin/pdf/'), str_replace(' ','_',$data['title'].'.pdf'));
                }
                $data['jd']= str_replace(' ','_',$data['title'].'.pdf');
                return $this->jobRepository->update($request->id,$data);
            }
        }
        return false;
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        if ($id){
            return $this->jobRepository->delete($id);
        }
        return false;
    }

    public function search($key)
    {
        // TODO: Implement search() method.
        return $this->jobRepository->search($key);
    }

    public function findByKeyWord($request)
    {
        // TODO: Implement findByKeyWord() method.
        $data = array();
        if (isset($request->category)) {
            $dataCategory = $this->jobRepository->searchByCategory($request->category);
            foreach ($dataCategory as $value){
                $data[] = $value;
            }
        }
        if (isset($request->location)) {
            $dataLocation = $this->jobLocationRepository->searchJobByLocation($request->location);
            foreach ($dataLocation as $value){
                if ($value->jobs){
                    $data[] = $value->jobs;
                }
            }
        }
        foreach ($data as $key => $value)
        {
            $categoryName = $this->categoryRepository->find($value['category_id']);
            $value['address'] = $categoryName['name'];
        }
        return $data;

    }
}
