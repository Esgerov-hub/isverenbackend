<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

    protected $table = 'users_roles';

    public function role()
    {
        return $this->hasOne(Role::class, 'id', 'role_id');
    }
}
