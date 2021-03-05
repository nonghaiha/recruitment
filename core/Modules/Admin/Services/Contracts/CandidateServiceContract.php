<?php
namespace Core\Modules\Admin\Services\Contracts;

interface CandidateServiceContract
{
    public function getAll();

    public function detail($id);
}
