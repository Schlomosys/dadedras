<?php
namespace App;


class TagQueue
{
    private $tags = [];

    public function addTag($tag)
    {
       // $this->tags[] = $tag;
       $this->attachTag($tag);
    }

    public function getTags()
    {
        return $this->tags;
    }
}
