<?php
namespace Core\Modules\Admin\Repositories\Contracts;

interface LocationRepositoryContract
{
    public function getAll();

    public function find($id);

    public function store($data);

    public function update($id,$data);

    public function delete($id);

    public function search($key);
}
