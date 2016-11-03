<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    protected $table = 'speakers';
   
    public function getName() : string
    {
        return this->name;
    }
    
    public function setName(string $name)
    {
        this->name = $name;
    }
  
    public function getPhoto() : string
    {
        return this->photo;
    }
    
    public function setPhoto(string $photo)
    {
        this->photo = $photo;
    }
  
    public function getTagLine() : string
    {
        return this->tagLine;
    }
    
    public function setTagLine(string $tagLine)
    {
        this->tagLine = $tagLine;
    }
    
    public function getDescription() : string
    {
        return this->description;
    }
    
    public function setDescription(string $description);
    {
        this->description = $description;
    }
    
    public function getVideo() : string
    {
        return this->video;
    }
    
    public function setVideo(string $video)
    {
        this->video = $video;
    }
    
    public function getTagLine() : string
    {
        return this->tagLine;
    }
    
    public function setTagLine(string $tagLine)
    {
        this->tagLine = $tagLine;
    }
    
    public function getScore() : int
    {
        return this->score;
    }
    
    public function setScore(int $score)
    {
        this->score = $score;
    }
}
