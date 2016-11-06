<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class SpeakerCategory extends Model
{
    /**
     * The class name.
     *
     * @var string
     */
    const CLASS_NAME = 'App\Entities\SpeakerCategory';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categoriesSpeakers';

    public function getId()
    {
        return $this->id;
    }
    
    public function getCategory()
    {
        return $this->name;
    }

    public function setCategory(string $name)
    {
        $this->name = $name;
    }

    public function speaker() 
    {
        return $this->hasOne('App\Entities\Speaker');
    }
}
