<?php

namespace Core\Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Core\Modules\Admin\Models\JobLocation;

class Location extends Model
{
    protected $table = 'locations';

    protected $fillable = [
        'street',
        'city',
        'country',
        'zip',
        'post_code',
        'create_at',
        'updated_at'
    ];

    protected $hidden = [];

    public function location_job()
    {
        return $this->hasMany(JobLocation::class);
    }
}
