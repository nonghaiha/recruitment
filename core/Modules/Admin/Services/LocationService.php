<?php
namespace Core\Modules\Admin\Services;

use Barryvdh\DomPDF\PDF;
use Core\Modules\Admin\Repositories\Contracts\LocationRepositoryContract;
use Core\Modules\Admin\Services\Contracts\LocationServiceContract;

class LocationService implements LocationServiceContract
{
    protected $locationRepository;
    public function __construct
    (
        LocationRepositoryContract $locationRepository
    )
    {
        $this->locationRepository = $locationRepository;
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
        return $this->locationRepository->getAll();
    }

    public function find($id)
    {
        // TODO: Implement find() method.
        if ($id){
            return $this->locationRepository->find($id);
        }
        return false;
    }

    public function store($data)
    {
        // TODO: Implement store() method.
        if ($data){
            return $this->locationRepository->store($data);
        }
        return false;
    }

    public function update($request)
    {
        // TODO: Implement update() method.
        return $this->locationRepository->update($request->id,$request->only(['street','city','zip','post_code']));
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        if ($id){
            return $this->locationRepository->delete($id);
        }
        return false;
    }

    public function search($key)
    {
        // TODO: Implement search() method.
        return $this->locationRepository->search($key);
    }
}
