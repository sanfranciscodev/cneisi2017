<?php
namespace App\Entities;

class Conference
{
	private $titulo;
	private $descripcion;
	private $categoria;
	private $fechaHora;
	private $duracion;

	public function __construct (string $titulo, string $descripcion, string $categoria, DateTime $fechaHora, int $duracion)
	{
		$this->titulo = $titulo;
		$this->descripcion = $descripcion;
		$this->categoria = new categoria($titulo);
		$this->fechaHora = $fechaHora;
		$this->duracion = $duracion;
	}