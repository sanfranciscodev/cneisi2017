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

    const ALL_TYPES = [self::UTN_STUDENT, self::UTN_GRADUATED, self::GENERAL_AUDIENCE];

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

    public function getUniversityRegion()
    {
        return $this->university_region;
    }

    public function setUniversityRegion(string $university_region) 
    {
        return $this->university_region = $university_region;
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
