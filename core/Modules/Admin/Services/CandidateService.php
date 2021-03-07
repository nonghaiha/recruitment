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

    public function store($request)
    {
        // TODO: Implement store() method.
        $data = $request->all();
        if ($data){
            if ($request->avatar){
                $file = $request->avatar;
                $fileName = generate_random_string(10) . generate_random_string(11) . substr($file->getClientOriginalName(), strpos($file->getClientOriginalName(), '.'));
                $file->move(storage_path('app/public/client/avatar'),$fileName);
                $data['avatar'] = $fileName;
            }
            if (isset($request->cv)){
                $file = $request->cv;
                $fileName = $file->getClientOriginalName();
                $file->move(storage_path('app/public/client/pdf'),$fileName);
                $data['cv'] = $fileName;
            }
            return $this->candidateRepository->store($data);
        }
        return false;
    }
}
