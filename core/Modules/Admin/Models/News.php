<?php

namespace Core\Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Core\Modules\Admin\Models\Job;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = [
        'author_id',
        'title',
        'description',
        'job_id',
        'created_at',
        'updated_at',
        'published_at'
    ];

    protected $hidden = [];

    public function jobs(){
        return $this->hasOne(Job::class,'job_id');
    }
}
