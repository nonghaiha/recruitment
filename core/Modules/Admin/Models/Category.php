<?php

namespace Core\Modules\Admin\Models;

use Core\Modules\Admin\Models\Job;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name',
        'description',
        'tag',
        'created_at',
        'updated_at'
    ];

    public function job()
    {
        return $this->hasMany(Job::class)->with('find_branch_location');
    }

}
