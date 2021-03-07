<?php
namespace Core\Modules\Admin\Services;

use Core\Modules\Admin\Repositories\Contracts\CategoryRepositoryContract;
use Core\Modules\Admin\Services\Contracts\CategoryServiceContract;

class CategoryService implements CategoryServiceContract
{
    protected $categoryRepository;
    public function __construct
    (
        CategoryRepositoryContract $categoryRepository
    )
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function store($request){
        $data = $request->all();
        return $this->categoryRepository->store($data);
    }

    public function getAll()
    {
        return $this->categoryRepository->getAll();
    }

    public function find($id)
    {
        return $this->categoryRepository->find($id);
    }

    public function update($data)
    {
        // TODO: Implement update() method.
        if ($data){
            return $this->categoryRepository->update($data['id'],$data->only(['name','description','tag']));
        }
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        return $this->categoryRepository->delete($id);
    }

    public function getAllForClient()
    {
        // TODO: Implement getAllForClient() method.
        return $this->categoryRepository->getAllForClient();
    }
}
