<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuariosTableSeeder extends Seeder
{
    public function run()
    {
        Usuario::factory()
            ->create([
                'email' => 'fabricio',
                'password' => bcrypt('123')
            ]);
    }
}

