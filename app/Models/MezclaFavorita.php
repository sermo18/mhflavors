<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MezclaFavorita extends Model
{
    use HasFactory;
    //Select the table of our database
    protected $table = 'mezclas_favoritas';
    public $timestamps = false;
    //Connect with the table 'usuarios'
    public function usuario()
    {
    return $this->belongsTo('App\Models\Usuario', 'usuario_id');
    }
    public function mezclas()
    {
    return $this->belongsTo('App\Models\Usuario', 'mezclas_id');
    }

}
