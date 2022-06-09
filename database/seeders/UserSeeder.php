<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        Schema::insert('users', function(Blueprint $table){
            $table->name('Harold Cortes') ;
            $table->email('admon@inseguroscditi.com');
            $table->password('123');
            $table->rol('Administrador');

        });
        */
        DB::table('users')->insert([
            'name' => 'Harold Cortes',
            'email' => 'admon@inseguroscditi.com',
            'password' => bcrypt('123'),
            'rol' => 'Administrador'
        ]);




    }
}
