<?php
namespace Core\Modules\Admin\Repositories\Contracts;

interface NewsRepositoryContract
{
    public function getAll();

    public function store($data);

    public function find($id);

    public function update($id,$data);

    public function delete($id);

    public function search($key);

    public function pagination();
}
