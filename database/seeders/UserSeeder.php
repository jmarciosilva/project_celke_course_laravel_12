<?php

namespace Database\Seeders;

use App\Models\User;
use Exception;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        try {
            // Verificar se o usuário já estiver no BD caso não cadastrar
            if (!User::where('email', 'jmarciosilva@gmail.com')->first()) {
                User::create([
                    'name' => 'José Márcio Ferreira da Silva',
                    'email' => 'jmarciosilva@gmail.com',
                    'password' => '123456A#',
                ]);
            }

            // Verificar se o usuário já estiver no BD caso não cadastrar
            if (!User::where('email', 'aparecida@gmail.com')->first()) {
                User::create([
                    'name' => 'Aparecida Cardoso da Silva',
                    'email' => 'aparecida@gmail.com',
                    'password' => '123456A#',
                ]);
            }

            // Verificar se o usuário já estiver no BD caso não cadastrar
            if (!User::where('email', 'livia@gmail.com')->first()) {
                User::create([
                    'name' => 'Livia Jussara Zaidan Ferreira',
                    'email' => 'livia@gmail.com',
                    'password' => '123456A#',
                ]);
            }

            // Verificar se o usuário já estiver no BD caso não cadastrar
            if (!User::where('email', 'gustavo@gmail.com')->first()) {
                User::create([
                    'name' => 'Gustavo Bonfim',
                    'email' => 'gustavo@gmail.com',
                    'password' => '123456A#',
                ]);
            }
        } catch (Exception $e) {
        }
    }
}
