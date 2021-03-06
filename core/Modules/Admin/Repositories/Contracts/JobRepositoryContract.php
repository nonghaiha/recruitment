<?php
namespace Core\Modules\Admin\Repositories\Contracts;

interface JobRepositoryContract
{
    public function store($data);

    public function getAll();

    public function find($id);

    public function findByCategoryID($id);

    public function update($id,$data);

    public function delete($id);

    public function search($key);
}
