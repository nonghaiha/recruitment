<?php
namespace Core\Modules\Admin\Services;

use Carbon\Carbon;
use Core\Modules\Admin\Repositories\Contracts\NewsRepositoryContract;
use Core\Modules\Admin\Services\Contracts\NewsServiceContract;

class NewsService implements NewsServiceContract
{
    protected $newsRepository;
    public function __construct
    (
        NewsRepositoryContract $newsRepository
    )
    {
        $this->newsRepository = $newsRepository;
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
        return $this->newsRepository->getAll();
    }

    public function store($request)
    {
        // TODO: Implement store() method.
        if ($request){

            if (auth()->user()){

                $data = $request->all();
                $data['author_id'] = auth()->user()->id;

                if ($data['published_at'] == null){
                    $data['published_at'] = Carbon::now();
                }

                if (isset($data['is_publish'])){
                    $data['is_publish'] = 1;
                }

                return $this->newsRepository->store($data);

            }
        }
        return false;
    }

    public function find($id)
    {
        // TODO: Implement find() method.
        if ($id){
            $data = $this->newsRepository->find($id);
            return $data;
        }
        return false;
    }

    public function update($data)
    {
        // TODO: Implement update() method.
        if ($data){

            if ($data['published_at'] == null){
                $data['published_at'] = Carbon::now();
            }

            if (isset($data['is_publish'])){
                $data['is_publish'] = 1;
            }

            return $this->newsRepository->update($data->id,$data->only(['title','description','published_at','is_publish']));
        }
        return false;
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        return $this->newsRepository->delete($id);
    }

    public function search($key)
    {
        // TODO: Implement search() method.
        return $this->newsRepository->search($key);
    }
}
