<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Usuario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $login = $this->faker->firstname;
        return [
	'nombre' => $this->faker->unique()->name,
	'nacimiento' => $this->faker->numberBetween(1950, 1990),
    'login' => $login,
    'password'=>  bcrypt($login),
    'rol' => 'editor',


        ];
    }
}
