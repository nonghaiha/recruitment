<?php

namespace Core\Modules\Admin\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Core\Modules\Admin\Models\Role;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    use SoftDeletes {
        SoftDeletes::restore as restoreSoftDelete;
    }
    use EntrustUserTrait {
        EntrustUserTrait::restore as restoreEntrustUser;
    }
    protected $table = 'users';
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'is_admin', 'created_at', 'updated_at', 'deleted_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function restore()
    {
        $this->restoreSoftDelete();
        $this->restoreEntrustUser();
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class,'role_user');
    }

    public function candidates()
    {
        return $this->hasMany(Candidate::class);
    }
}
