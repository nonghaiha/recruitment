<?php
namespace Core\Modules\Admin\Repositories\Contracts;

interface JobLocationRepositoryContract
{
    public function store($data);

    public function searchJobByLocation($location);
}
