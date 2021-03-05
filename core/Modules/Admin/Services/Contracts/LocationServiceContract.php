<?php
namespace Core\Modules\Admin\Services\Contracts;

interface LocationServiceContract
{
    public function getAll();

    public function find($id);

    public function store($data);

    public function update($request);

    public function delete($id);

    public function search($key);
}
