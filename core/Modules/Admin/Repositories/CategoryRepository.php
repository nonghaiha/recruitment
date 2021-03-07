<?php
namespace Core\Modules\Admin\Repositories;

use Core\Modules\Admin\Models\Category;
use Core\Modules\Admin\Repositories\Contracts\CategoryRepositoryContract;

class CategoryRepository implements CategoryRepositoryContract
{
    protected $categoryModel;
    public function __construct
    (
        Category $categoryModel
    )
    {
        $this->categoryModel = $categoryModel;
    }

    public function getAll()
    {
        return $this->categoryModel->get();
    }

    public function store($data)
    {
        return $this->categoryModel->create($data);
    }

    public function find($id)
    {
        return $this->categoryModel->with('job')->find($id);
    }

    public function update($id, $data)
    {
        // TODO: Implement update() method.
        return $this->categoryModel->where('id',$id)->update($data);
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        return $this->categoryModel->where('id',$id)->delete();
    }

    public function getAllForClient()
    {
        // TODO: Implement getAllForClient() method.
        return $this->categoryModel->with('job')->get();
    }
}
