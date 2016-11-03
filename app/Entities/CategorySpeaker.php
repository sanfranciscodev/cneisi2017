<?php
namespace App\Entities;

class CategorySpeaker
{
	private $categoria;

	public function __construct (string $categoria)
	{
		$this->categoria = $categoria;
	}

}