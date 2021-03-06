<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;


class Role extends Model
{
    public $timestamps = false;
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }


    public function scopeIs($builder, $role)
    {
        return $builder->where('name', $role);
    }
}
