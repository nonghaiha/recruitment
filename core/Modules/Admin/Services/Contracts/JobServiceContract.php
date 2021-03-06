<?php
namespace Core\Modules\Admin\Services\Contracts;

interface JobServiceContract
{
    public function getAll();

    public function find($id);

    public function findByCategoryID($id);

    public function store($request);

    public function update($request);

    public function delete($id);

    public function search($key);
}
