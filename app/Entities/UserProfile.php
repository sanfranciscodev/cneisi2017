<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserProfile extends Authenticatable
{
    /**
     * {@inheritdoc}
     */
    protected $table = 'user_profiles';

    /**
     * @var string
     */
    private $userType;

    const UTN_STUDENT = 'student';
    const UTN_GRADUATED = 'graduated';
    const GENERAL_AUDIENCE = 'general_audience';

    public function getId()
    {
        return $this->id;
    }

    public function getUserType()
    {
        return $this->type;
    }

    public function setUserType(string $type)
    {
        $this->type = $type;
    }

    public function getDni()
    {
        return $this->dni;
    }

    public function setDni(int $dni)
    {
        $this->dni = $dni;
    }

    public function getFacultad()
    {
        return $this->facultad;
    }

    public function setFacultad(string $facultad)
    {
        $this->facultad = $facultad;
    }

    public function getLegajo()
    {
        return $this->legajo;
    }

    public function setLegajo(int $legajo)
    {
        $this->legajo = $legajo;
    }

    public function user() 
    {
        return $this->hasOne(User::class);
    }
}
