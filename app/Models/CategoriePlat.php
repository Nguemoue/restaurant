<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoriePlat extends Model
{
	use HasFactory;

//	protected $fillable = ["nom","description"];

	public function plats(): HasMany
	{
		return $this->hasMany(Plat::class,"categorie_plat_id");
	}
}
