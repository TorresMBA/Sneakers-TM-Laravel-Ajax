<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->truncateTablas([ // Que tablas se van a truncar
            'rol',
            'permiso',
            'usuario_rol'
        ]);

        $this->call(TablaRolSeeder::class);
        $this->call(TablaPermisoSeeder::class);
        $this->call(UsuarioAdminSeeder::class);//Se llama a los sedders ya creados para trabajarlo y truncarlos
    }

    protected function truncateTablas(array $tablas){
       /*  DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach($tablas as $tabla){
            DB::table($tabla)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); */
    }
}
