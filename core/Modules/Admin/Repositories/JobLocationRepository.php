<?php
namespace Core\Modules\Admin\Repositories;

use Core\Modules\Admin\Models\JobLocation;
use Core\Modules\Admin\Repositories\Contracts\JobLocationRepositoryContract;

class JobLocationRepository  implements JobLocationRepositoryContract
{
    protected $jobLocationModel;
    public function __construct
    (
        JobLocation $jobLocationModel
    )
    {
        $this->jobLocationModel = $jobLocationModel;
    }

    public function store($data)
    {
        // TODO: Implement store() method.
        return $this->jobLocationModel->create($data);
    }
}
