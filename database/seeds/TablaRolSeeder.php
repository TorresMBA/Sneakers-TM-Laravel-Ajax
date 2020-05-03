<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rols = [
            'administrador',
            'usuario',
            'supervisor'
        ];
        foreach($rols as $key => $value){
            DB::table('rol') -> insert([
                'nom_rol' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        } 
    }
}
