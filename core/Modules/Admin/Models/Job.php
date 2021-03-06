<?php

namespace Core\Modules\Admin\Models;

use Core\Modules\Admin\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Core\Modules\Admin\Models\JobLocation;

class Job extends Model
{
    protected $table = 'jobs';

    protected $fillable = [
        'category_id',
        'title',
        'author_id',
        'description',
        'jd',
        'number_of_employees',
        'salary',
        'applied_at',
        'ended_at',
        'created_at',
        'updated_at'
    ];

    protected $hidden = [];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function candidates()
    {
        return $this->hasMany(Candidate::class);
    }
}
