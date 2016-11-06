<?php

namespace App\\Entities;

use Illuminate\Database\Eloquent\Model;

class ConferenceCategory extends Model
{
    /**
     * The class name.
     *
     * @var string
     */
    const CLASS_NAME = 'App\Entities\ConferenceCategory';

    /**
     * @var string
     */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getCategory()
    {
        return $this->name;
    }

    public function setCategory(string $name)
    {
        $this->name = $name;
    }
}
