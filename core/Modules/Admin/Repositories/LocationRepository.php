<?php
namespace Core\Modules\Admin\Repositories;

use Core\Modules\Admin\Models\Location;
use Core\Modules\Admin\Repositories\Contracts\LocationRepositoryContract;

class LocationRepository implements LocationRepositoryContract
{
    protected $locationModel;
    public function __construct
    (
        Location $locationModel
    )
    {
        $this->locationModel = $locationModel;
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
        return $this->locationModel->orderBy('id','desc')->get();
    }

    public function find($id)
    {
        // TODO: Implement find() method.
        return $this->locationModel->find($id);
    }

    public function store($data)
    {
        // TODO: Implement store() method.
        return $this->locationModel->create($data);
    }

    public function update($id, $data)
    {
        // TODO: Implement update() method.
        return $this->locationModel->where('id',$id)
            ->update($data);
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        return $this->locationModel->where('id',$id)
            ->delete();
    }

    public function search($key)
    {
        // TODO: Implement search() method.
        return $this->locationModel->where('street','LIKE',"%{$key}%")
            ->orWhere('city','LIKE',"%{$key}%")
            ->orWhere('country','LIKE',"%{$key}%")
            ->get();
    }
}
