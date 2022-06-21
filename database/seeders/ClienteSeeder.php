<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'identificacion' => '222222222',
            'nombre' => 'Cliente x Defecto',
            'email' => 'jose.cortes0986@misena.edu.co',
            'telefono' => '313333333'
        ]);
    }
}
