<?php


namespace App\DataObject;


use Spatie\LaravelData\Data;

class PlatDTO extends Data
{
	public string $nom;
	public string $prix;
	public  string $fakePrix;
	public string $description;

	function __construct($nom,$prix,$fakePrix,$description)
	{

	}

}
