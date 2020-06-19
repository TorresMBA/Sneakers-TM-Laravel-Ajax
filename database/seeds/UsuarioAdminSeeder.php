<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsuarioAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert([
            'usuario' => 'admin', 
            'password' => bcrypt('123'), 
            'nombre' => 'Michigun', 
            'apellido' => 'Toorres',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('usuario')->insert([
            'usuario' => 'user', 
            'password' => bcrypt('123'), 
            'nombre' => 'Peluchin', 
            'apellido' => 'Menacho',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('usuario_rol')->insert([
            'rol_id' => 1, 
            'usuario_id' => 1, 
            'estado' => 1, 
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('usuario_rol')->insert([
            'rol_id' => 2, 
            'usuario_id' => 2, 
            'estado' => 1, 
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
