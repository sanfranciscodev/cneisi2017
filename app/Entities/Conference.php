<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'conferences';

    public function getId()
    {
        return $this->id;
    }    
    
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }
    
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }
    
    public function getDate()
    {
        return $this->date;
    }
    
    public function setDate(string $date)
    {
        $this->date = $date;
    }

    public function getDuration()
    {
        return $this->duration;
    }
    
    public function setDuration(int $duration)
    {
        $this->duration = $duration;
    }

    public function getSpeaker()
    {
        return $this->speaker;
    }

    public function setSpeaker(Speaker $speaker)
    {
        $this->speaker = $speaker;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory(Category $category)
    {
        $this->category = $category;
    }

    /**
    * Each Conference HAS one Speaker
    *
    *@return void
    */
    public function speaker() 
    {   
        return $this->belongsTo(Speaker::class);
    }

    public function category() 
    {   
        return $this->belongsTo(Category::class);
    }
}
