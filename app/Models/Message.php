<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $table = 'messages';
    public $timestamps = false;
    //Connect with the table 'usuarios'
    public function usuario()
    {
    return $this->belongsTo('App\Models\Usuario', 'usuario_id');
    }

}
