<?php


namespace App\DataObject;


use Spatie\LaravelData\Data;

class UserDTO extends Data
{
	public string $email;
	public string $password;

}
