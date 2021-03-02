<?php
namespace Core\Modules\Admin\Services\Contracts;

interface CategoryServiceContract
{
    public function getAll();

    public function store($request);

    public function find($id);

    public function update($data);
}
