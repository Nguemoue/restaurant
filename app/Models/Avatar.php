<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    use HasFactory;

    protected array $hidden = [
    	"profile_type","profile_id"
	 ];

    /**
	  * propriétés fillable qui permet d'enregistre une instance d ecet elements
	  **/
    protected array $fillable = [
    	"photo_url","profile_type","profile_id","updated_at","created_at"
	 ];
    public function profile(): \Illuminate\Database\Eloquent\Relations\MorphTo
	 {
	 	return $this->morphTo("profile");
	 }

}
