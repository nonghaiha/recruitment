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

    public function find_same_job()
    {
        return $this->category()->with('same_job');
    }

    public function candidates()
    {
        return $this->hasMany(Candidate::class);
    }

    public function job_location()
    {
        return $this->hasMany(JobLocation::class);
    }

    public function locations()
    {
        return $this->belongsToMany(Location::class);
    }

    public function find_branch_location()
    {
        return $this->belongsToMany(Location::class,'job_location');
    }
}
