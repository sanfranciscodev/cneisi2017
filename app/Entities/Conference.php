<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use App\Entities\Speaker;

class Conference extends Model
{
    /**
     * The class name.
     *
     * @var string
     */
    const CLASS_NAME = 'App\Entities\Conference';

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

    public function setTitle( $title)
    {
        $this->title = $title;
    }
    
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription( $description)
    {
        $this->description = $description;
    }
    
    public function getDate()
    {
        return $this->date;
    }
    
    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getDuration()
    {
        return $this->duration;
    }
    
    public function setDuration( $duration)
    {
        $this->duration = $duration;
    }

    public function setSpeaker( $speaker)
    {
        $this->speaker = $speaker;
    }

    public function getSpeaker()
    {
        return $this->speaker;
    }

    public function setCategory(string $category)
    {
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }

    /**
    * Each Conference HAS one Speaker
    *
    *@return void
    */
    public function speaker() 
    {
        return $this->belongsTo('App\Entities\Speaker');
    }
}
