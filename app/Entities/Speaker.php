<?php
namespace App\Entities;

class Speaker
{
    /**
     * @var string
     */
    private $slug;
    
    private $name;
    
    private $picture;
    
    public function __construct(string $slug, string $name)
    {
        $this->slug = $slug;
        $this->name = $name;
    }
    
    public function getSlug()
    {
        return $this->slug;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function getPicture()
    {
        return $this->picture;
    }
    
    public function setPicture(string $picture)
    {
        $this->picture = $picture;
    }
    
    public function hasPicture()
    {
        return !empty($this->picture);
    }
}