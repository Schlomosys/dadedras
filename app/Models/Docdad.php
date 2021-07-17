<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Docdad extends Model
{
    use HasFactory;
    
    use \Conner\Tagging\Taggable;
    
    
    protected $fillable = [
    'title',
    'auteur',
    'name',
    'slug',
    'seo_title',
    'references',
    'type',
    'langues',
    'collection',
    'lientelechargement',
    'validity',
    'introduction',
    'description',
    'meta_description',
    'meta_keywords',
    'active',
    'photocouv',
    'video',
    'fichier',

    
    'nombpages',
    'nombdevus',
    'nombtelech',
    'nombpartage',


    'creation_date',

    'category_id',
    'visibility_id',
    
    
    
    
    'tags'];




    public function category()
{ 
    return $this->belongsTo(Category::class); 
}

public function visibility()
{ 
    return $this->belongsTo(Visibility::class); 
}


}

