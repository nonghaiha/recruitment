<?php

namespace Core\Modules\Admin\Models;

use Core\Modules\Admin\Models\Job;
use Core\Modules\Admin\Models\Candidate;
use Illuminate\Database\Eloquent\Model;

class CandidateJob extends Model
{
    protected $table = 'candidate_job';

    protected $fillable = [
        'job_id',
        'candidate_id',
    ];

    protected $hidden = [];

    public $timestamp = false;

    public function jobs()
    {
        return $this->belongsToMany(Job::class,'job_id');
    }

    public function candidates()
    {
        return $this->belongsToMany(Candidate::class,'candidate_id');
    }
}
