<?php
namespace Core\Modules\Admin\Repositories;

use Core\Modules\Admin\Models\News;
use Core\Modules\Admin\Repositories\Contracts\NewsRepositoryContract;

class NewsRepository implements NewsRepositoryContract
{
    protected  $newsModel;
    public function __construct
    (
        News $newsModel
    )
    {
        $this->newsModel = $newsModel;
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
        return $this->newsModel
            ->with('author')
            ->orderBy('id','desc')->get();
    }

    public function store($data)
    {
        // TODO: Implement store() method.
        return $this->newsModel->create($data);
    }

    public function find($id)
    {
        // TODO: Implement find() method.
        return $this->newsModel->find($id);
    }

    public function update($id, $data)
    {
        // TODO: Implement update() method.
        return $this->newsModel->where('id',$id)->update($data);
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        return $this->newsModel->where('id',$id)->delete();
    }

    public function search($key)
    {
        // TODO: Implement search() method.
        return $this->newsModel->join('users','users.id','=','news.author_id')
            ->select('news.*','users.name')
            ->where("news.title","LIKE","%{$key}%")
            ->orWhere("users.name","LIKE","%{$key}%")
            ->get();
    }

    public function pagination()
    {
        // TODO: Implement pagination() method.
        return $this->newsModel
            ->with('author')
            ->orderBy('id','desc')->paginate(15);

    }
}
