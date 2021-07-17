<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    use HasFactory;


    protected $fillable = [
        'count',
        'nombdevus',
        'datelecture',
        'user_id',
        'docdad_id'
       
        ];
    
    
    
    
        public function user()
    { 
        return $this->belongsTo(User::class); 
    }
    
    public function docdad()
    { 
        return $this->belongsTo(Docdad::class); 
    }
}
