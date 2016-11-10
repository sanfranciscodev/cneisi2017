<?php
namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    private $type;
    private $studentNumber;
    private $university;

    const UTN_STUDENT = 'utn_student';
    const UTN_GRADUATED = 'utn_graduated';
    const GENERAL_PUBLIC = 'general_public';

    const ALL_TYPES = [self::UTN_STUDENT, self::UTN_GRADUATED, self::GENERAL_PUBLIC];

    public function __construct(string $type)
    {
        if (!in_array(strtolower($type), self::ALL_TYPES)) {
            throw new InvalidArgumentException("Invalid user type: {$type}");
        } else {
            $this->type = $type;
        }
    }

    public function getType()
    {
        return $this->type;
    }

    public function hasStudentNumber()
    {
        return !empty($this->studentNumber);
    }

    public function getStudentNumber()
    {
        return $this->studentNumber;
    }

    public function setStudentNumber(int $studentNumber)
    {
        $this->studentNumber = $studentNumber;
    }

    public function hasUniversity()
    {
        return !empty($this->university);
    }

    public function getUniversity()
    {
        return $this->university;
    }

    public function setUniversity(string $university)
    {
        $this->university = $university;
    }
}
