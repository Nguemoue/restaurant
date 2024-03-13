<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class User extends Authenticatable implements MustVerifyEmail,HasMedia
{
    use HasApiTokens, HasFactory, Notifiable,InteractsWithMedia;

    protected $guard = "web";
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected array $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected array $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected array $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
	  * Defining the relationships with another model
    */
    //pour la table de l'adresse
	public function addressUser(): HasOne
	{
		return $this->hasOne(AddressUser::class)->withDefault(function (){
			return new Addressuser();
		});
	}

	//pour la table des avatars
	public function avatar(): \Illuminate\Database\Eloquent\Relations\MorphOne
	{
		return $this->morphOne(Avatar::class,"profile")->withDefault(function (){
			return new Avatar();
		});
	}

	public function registerMediaConversions(Media $media = null): void
	{
		$this
			->addMediaConversion('preview')
			->fit(Manipulations::FIT_CROP, 300, 300)
			->nonQueued();
	}

	public function registerMediaCollections(): void
	{
		$this->addMediaCollection("avatar")->singleFile();
	}


}
