<?php
namespace Core\Modules\Admin\Repositories\Contracts;

interface CategoryRepositoryContract
{
    public function getAll();

    public function store($data);

    public function find($id);

    public function update($id,$data);

    public function delete($id);

    public function getAllForClient();
}
