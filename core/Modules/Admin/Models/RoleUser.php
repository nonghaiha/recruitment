<?php

namespace Core\Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    protected $table = 'role_user';

    protected $fillable = ['user_id','role_id'];

    protected $hidden = [];

    public $timestamps = false;
}
