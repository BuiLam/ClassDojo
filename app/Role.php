<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Permission;
use App\User;

class Role extends Model
{
    protected $fillable = [
        'name'
    ];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'role_has_permissions', 'role_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_has_roles', 'role_id');
    }
}
