<?php

namespace Core\Modules\Admin\Repositories;

use Core\Modules\Admin\Models\Candidate;
use Core\Modules\Admin\Repositories\Contracts\CandidateRepositoryContract;

class CandidateRepository implements CandidateRepositoryContract
{
    protected $candidateModel;

    public function __construct
    (
        Candidate $candidateModel
    )
    {
        $this->candidateModel = $candidateModel;
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
        return $this->candidateModel->orderBy('candidates.id','desc')
            ->get();
    }

    public function detail($id)
    {
        // TODO: Implement detail() method.
    }
}
