<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use DateTime;

class Conference extends Model
{
    protected $table = 'conferences';
    
    public function getTitle() : string
    {
        return this->title;
    }
    
    public function setTitle(string $title)
    {
        this->title = $title;
    }
    
    public function getDescription() : string
    {
        return this->title;
    }
    
    public function setDecription(string $description)
    {
        this->description = $description;
    }
    
    public function getDateAndTime() : DateTime
    {
        return this->dateAndTime;
    }
    
    public function setDateAndTime(DateTime $dateAndTime)
    {
        this->dateAndTime = $dateAndTime;
    }
    
    public function getDuration() : int
    {
        return this->duration;
    }
    
    public function setDuration(string $duration)
    {
        this->duration = $duration;
    }
}
