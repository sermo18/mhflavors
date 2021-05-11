<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mezcla extends Model
{
    use HasFactory;

    protected $table = 'mezclas';
    public $timestamps = false;
    public function usuario()
    {
    return $this->belongsTo('App\Models\Usuario', 'usuario_id');
    }

}
