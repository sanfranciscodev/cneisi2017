<?php
namespace App\Entities;

class Speaker
{
    private $slug;
    private $id;
    private $nombre;
    private $foto;
    private $tagLine;
    private $descripcion;
    private $video;
    private $puntaje;
    private $conferences;
    
    public function __construct(string $slug, string $nombre)
    {
        $this->slug = $slug;
        $this->id = $id;
        $this->nombre = $nombre;
        $this->foto = $foto;
        $this->tagLine = $tagLine;
        $this->descripcion = $descripcion;
        $this->video = $video;
        $this->puntaje = $puntaje;
        $this->conferences = [];
    }

    public function __get($property)
    {
    	if (property_exists($this, $property)) {
     		return $this->$property;
    	}
 	}

	public function __set($property, $value)
  	{
    	if (property_exists($this, $property)) {
    		if(gettype($value) == "Conference"){
    			addConference($value);
    		} else {
    		$this->$property = $value;
    	}
    }
    	return $this;
	}

	public function addConference(Conference $conference)
	{
		$this->conferences[] = $conference; 
	}
    
    public function tieneFoto()
    {
        if($this->foto == null) {
        	return false;
        } else {
        	return true;
    }
}