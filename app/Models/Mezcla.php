<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mezcla extends Model
{
    use HasFactory;
    //Select the table of our database
    protected $table = 'mezclas';
    public $timestamps = false;
    //Connect with the table 'usuarios'
    public function usuario()
    {
    return $this->belongsTo('App\Models\Usuario', 'usuario_id');
    }

}
