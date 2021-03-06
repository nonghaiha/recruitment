<?php
namespace Core\Modules\Admin\Repositories;

use Core\Modules\Admin\Models\Job;
use Core\Modules\Admin\Repositories\Contracts\JobRepositoryContract;

class JobRepository implements JobRepositoryContract
{
    protected $jobModel;
    public function __construct
    (
        Job $jobModel
    )
    {
        $this->jobModel = $jobModel;
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
        return $this->jobModel->with('category')->orderBy('id','desc')->get();
    }

    public function find($id)
    {
        // TODO: Implement find() method.
        return $this->jobModel->with('category')->find($id);
    }

    public function findByCategoryID($id)
    {
        // TODO: Implement findByCategoryID() method.
        return $this->jobModel->with('category','job_location','find_branch_location')->where('category_id',$id)->first();
    }

    public function store($data)
    {
        // TODO: Implement store() method.
        return $this->jobModel->create($data);
    }

    public function update($id,$data)
    {
        // TODO: Implement update() method.
        return $this->jobModel->where('id',$id)->update($data);
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        return $this->jobModel->where('id',$id)->delete();
    }

    public function search($key)
    {
        return $this->jobModel->join('categories','categories.id','=','jobs.category_id')
            ->select('jobs.*','categories.name')
            ->where('jobs.title','LIKE',"%{$key}%")
            ->orWhere('categories.name','LIKE',"%{$key}%")
            ->get();
    }
}
