<?php
namespace Core\Modules\Admin\Repositories\Contracts;

interface CandidateRepositoryContract
{
    public function getAll();

    public function detail($id);
}