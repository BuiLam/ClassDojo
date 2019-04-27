<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;
use App\Permission;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_has_roles', 'user_id');
    }

    public function hasPermission(Permission $permission)
    {
        $checkPermission = false;
        foreach ($this->roles as $role)
        {
            if ($role->permissions->contains($permission) === true)
            {
                $checkPermission = true;
            }
        }
        return $checkPermission;
    }
}
