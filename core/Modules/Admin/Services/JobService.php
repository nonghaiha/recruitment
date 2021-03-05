<?php
namespace Core\Modules\Admin\Services;

use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Core\Modules\Admin\Repositories\Contracts\JobRepositoryContract;
use Core\Modules\Admin\Services\Contracts\JobServiceContract;
use Illuminate\Support\Facades\Storage;

class JobService implements JobServiceContract
{
    protected $jobRepository;
    public function __construct
    (
        JobRepositoryContract $jobRepository
    )
    {
        $this->jobRepository = $jobRepository;
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

    public function store($request)
    {
        // TODO: Implement store() method.
        $data = $request->all();

        if ($data['salary'] == null || $data['salary'] == 0){
            $data['salary'] = 'Deal';
        }

        if ($data['applied_at'] == null){
            $data['applied_at'] = Carbon::now();
        }

        $data['ended_at'] = Carbon::parse($data['ended_at'])->format('Y-m-d');
        if (isset($request->jd)){
            $fileName = $request->jd;
            $path = $data['title'];
            $file = $request->file('jd');
            $fileExtension = $request->file('jd')->getClientOriginalExtension();
            $file->move(storage_path('app/public/pdf/'), str_replace(' ','_',$data['title'].'.pdf'));
            $data['jd'] = str_replace(' ','_',$data['title'].'.pdf');
        }
        $this->jobRepository->store($data);
        return true;

    }

    public function update($request)
    {
        // TODO: Implement update() method.
        if ($request){
            $data = $request->all();
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
                $file->move(storage_path('app/public/pdf/'), str_replace(' ','_',$data['title'].'.pdf'));
            }
            $data['jd']= str_replace(' ','_',$data['title'].'.pdf');
            return $this->jobRepository->update($request->id,$data);
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
}
