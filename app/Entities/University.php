<?php

namespace App\Entities;
use InvalidArgumentException;

class University
{
    public function getAll()
    {
        $universities = array(
        'BUENOS_AIRES'          => 'Buenos Aires',
        'CONCEPCION_URUGUAY'    => 'Concepcion del Uruguay',
        'CORDOBA'               => 'Cordoba',
        'DELTA'                 => 'Delta',
        'LA_PLATA'              => 'La Plata',
        'MENDOZA'               => 'Mendoza',
        'RESISTENCIA'           => 'Resistencia',
        'ROSARIO'               => 'Rosario',
        'SAN_FRANCISCO'         => 'San Francisco',
        'SANTA_FE'              => 'Santa Fe',
        'TUCUMAN'               => 'Tucuman',
        'VILLA_MARIA'           => 'Vila Maria',
         );
        return $universities;
    }
}
