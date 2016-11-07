<?php

namespace App\Entities;

use InvalidArgumentException;

class ConferenceCategory
{
    /**
     * @var string
     */
    private $name;

    const IT = 'it';
    const SCIENCE = 'science';
    const BUSINESS = 'business';

    const ALL_NAMES = [self::IT, self::SCIENCE, self::BUSINESS];

    public function __construct(string $name)
    {
        if (!in_array(strtolower($name), static::ALL_NAMES) {
            throw new InvalidArgumentException("Invalid category name: {$name}");
        } else{
            $this->name = $name;    
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function conference() 
    {
        return $this->hasMany(Conference::class);
    }

    public function speaker() 
    {
        return $this->hasMany(Speaker::class);
    }
}
