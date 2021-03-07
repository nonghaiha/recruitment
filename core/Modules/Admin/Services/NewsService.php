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
                }else{
                    $data['published_at'] = Carbon::parse($data['published_at'])->format('Y-m-d');
                }

                if (isset($data['is_publish'])){
                    $data['is_publish'] = 1;
                }

                if ($request->thumbnail){
                    $file = $request->thumbnail;
                    $fileName = generate_random_string(10) . generate_random_string(11) . substr($file->getClientOriginalName(), strpos($file->getClientOriginalName(), '.'));
                    $file->move(storage_path('app/public/images/thumbnail'),$fileName);
                    $data['thumbnail'] = $fileName;
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

    public function update($request)
    {
        // TODO: Implement update() method.
        if ($request){
        $data = $request->all();
        unset($data['_token']);
        unset($data['_method']);
            if ($data['published_at'] == null){
                $data['published_at'] = Carbon::now();
            }

            if (isset($data['is_publish'])){
                $data['is_publish'] = 1;
            }
            if ($request->thumbnail){
                $file = $request->thumbnail;
                $fileName = generate_random_string(10) . generate_random_string(11) . substr($file->getClientOriginalName(), strpos($file->getClientOriginalName(), '.'));
                $file->move(storage_path('app/public/images/thumbnail'),$fileName);
                $data['thumbnail'] = $fileName;
            }
            return $this->newsRepository->update($request->id,$data);
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

    public function pagination()
    {
        // TODO: Implement pagination() method.
        return $this->newsRepository->pagination();
    }
}
