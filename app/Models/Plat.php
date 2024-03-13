<?php

namespace App\Models;

use App\DataObject\PlatDTO;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\LaravelData\Contracts\DataObject;
use Spatie\LaravelData\WithData;

class Plat extends Model
{
	use HasFactory,WithData;

	public function getData(): string
	{
		return PlatDTO::class;
	}
}
