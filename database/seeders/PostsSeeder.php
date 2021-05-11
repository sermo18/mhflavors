<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use App\Models\Post;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = Usuario::all();
$usuario->each(function($usuario) {
Post::factory()->count(3)->create([
'usuario_id' => $usuario->id
]);
});

    }
}
