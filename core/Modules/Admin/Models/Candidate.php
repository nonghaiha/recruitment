<?php

namespace Core\Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $table = 'candidates';

    protected $fillable = [
        'user_id',
        'location_id',
        'job_id',
        'cv',
        'avatar',
        'user_id',
        'name',
        'email',
        'phone',
        'address',
        'experience',
        'created_at',
        'updated_at',
    ];

    protected $hidden = [];

    public function job()
    {
        return $this->belongsTo(Job::class,'job_id');
    }
}
