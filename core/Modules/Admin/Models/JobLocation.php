<?php

namespace Core\Modules\Admin\Models;

use Core\Modules\Admin\Models\Job;
use Core\Modules\Admin\Models\Location;
use Illuminate\Database\Eloquent\Model;

class JobLocation extends Model
{
    protected $table = 'job_location';

    protected $fillable = [
        'job_id',
        'location_id'
    ];

    protected $hidden = [];

    public $timestamp = false;

    public function jobs()
    {
        return $this->belongsTo(Job::class,'job_id');
    }

    public function locations()
    {
        return $this->belongsTo(Location::class,'location_id');
    }

}
