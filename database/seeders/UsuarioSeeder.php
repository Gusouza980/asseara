<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('usuarios')->insert([
            'nome' => 'Administrador',
            'email' => 'assearaalfenas@hotmail.com',
            'senha' => Hash::make('12345'),
            'usuario' => 'admin',
            'acesso' => 0
        ]);
    }
}
