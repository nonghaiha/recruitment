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
        'created_at',
        'updated_at',
        'published_at',
        'is_publish',
        'thumbnail'
    ];

    protected $hidden = [];

    public function author()
    {
        return $this->belongsTo(User::class,'author_id');
    }
}
