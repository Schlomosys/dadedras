<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;
use Overtrue\LaravelLike\Traits\Likeable;
use League\CommonMark\DocParser;
use League\CommonMark\Environment;
use League\CommonMark\HtmlRenderer;
use Spatie\Tags\HasTags;

class Post extends Model
{
    use HasFactory, Commentable, Likeable, HasTags;

    protected $appends = ['Tags'];

public function getTagsAttribute()
{
    return $this->tags()->get();
}

    /*public static function boot()
    {
        parent::boot();

        self::saving( function($model) {
            // Set up a container for any hashtags that get parsed
            \App::singleton('tagqueue', function() {
                return new \App\TagQueue;
            });
        
            $environment = Environment::createCommonMarkEnvironment();
            $environment->addInlineParser(new \App\Parsers\HashtagParser());
            $parser = new DocParser($environment);
            $htmlRenderer = new HtmlRenderer($environment);

            $text = $parser->parse($model->body);

            $model->html = $htmlRenderer->renderBlock($text);
        });
        self::saved( function($model) {
            $model->syncTags(app('tagqueue')->getTags());
        });
    }*/
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'title',
        'slug',
        'seo_title',
        'excerpt',
        'body',
        'meta_description',
        'meta_keywords',
        'active',
        //'user_id',
        'image',
        'video',
        'fichier',

        
        
    ];
    public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}


// Likes
public function likes(){
    return $this->hasMany(LikeDislike::class ,'post_id')->sum('like');
}
// Dislikes
public function dislikes(){
    return $this->hasMany(LikeDislike::class,'post_id')->sum('dislike');
}

}
