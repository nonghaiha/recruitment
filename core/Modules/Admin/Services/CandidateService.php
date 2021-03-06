<?php
namespace Core\Modules\Admin\Services;

use Carbon\Carbon;
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

    public function find($id)
    {
        // TODO: Implement detail() method.
        $data = $this->candidateRepository->find($id);
        Carbon::setLocale('en');
        $data['time_apply'] = Carbon::parse($data['created_at'])->diffForHumans(Carbon::now());
        return $data;
    }
}
