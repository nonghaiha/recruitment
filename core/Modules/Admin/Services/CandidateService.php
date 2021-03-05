<?php
namespace Core\Modules\Admin\Services;

use Core\Modules\Admin\Repositories\Contracts\CandidateRepositoryContract;
use Core\Modules\Admin\Services\Contracts\CandidateServiceContract;

class CandidateService implements CandidateServiceContract
{
    protected $candidateRepository;
    public function __construct
    (
        CandidateRepositoryContract $candidateRepository
    )
    {
        $this->candidateRepository = $candidateRepository;
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
        return $this->candidateRepository->getAll();
    }

    public function detail($id)
    {
        // TODO: Implement detail() method.
    }
}
