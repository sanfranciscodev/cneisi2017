<?php
namespace App\Entities;

class Category
{
	private $categoria;

	public function __construct (string $categoria)
	{
		$this->categoria = $categoria;
	}

}