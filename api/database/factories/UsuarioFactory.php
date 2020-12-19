<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UsuarioFactory extends Factory
{
    protected $model = Usuario::class;

    public function definition()
    {
        return [
            'email' => Str::random(10),
            'password' => Str::random(10),
            'remember_token' => Str::random(10),
        ];
    }
}
