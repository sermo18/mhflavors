<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


use Illuminate\Database\Eloquent\Model;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'login',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'login',
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

	protected $table = 'usuarios';

    public function posts()
        {
        return $this->hasMany('App\Models\Post');
        }

    public function mezclas()
        {
        return $this->hasMany('App\Models\Mezcla');
        }
        public function mezclasFavoritas()
        {
        return $this->hasMany('App\Models\MezclaFavorita');
        }
        public function message()
        {
            return $this->hasMany('App\Models\Message');
        }

}
