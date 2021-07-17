<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visibility extends Model
{
    use HasFactory;

    public function docdads() 
    { 
        return $this->hasMany(Docdad::class); 
    }

    public function users() 
    { 
        return $this->hasMany(User::class); 
    }
}
