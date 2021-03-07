<?php
namespace Core\Modules\Admin\Services\Contracts;

interface NewsServiceContract
{
    public function getAll();

    public function store($request);

    public function find($id);

    public function update($request);

    public function delete($id);

    public function search($key);

    public function pagination();
}
