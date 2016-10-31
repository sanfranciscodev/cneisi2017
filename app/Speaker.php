<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    protected $table = 'speakers';
   
    public function getName() : String
    {
        return this->$name;
    }
    public function setName(String $nombre)
    {
        this->$name = $name;
    }
  
    public function getPhoto() : String
    {
        return this->$photo;
    }
    public function setPhoto(String $foto)
    {
        this->$photo = $photo;
    }
  
  
}
