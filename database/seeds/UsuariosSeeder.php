<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Foreach_;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //array con usuario
        $mis_usuarios = [
            ['Daniela','Caicedonia',20,'Sevilla',100000],
            ['kevin','sevilla',20,'Sevilla',300000],
            ['camilo','Bogota',50,'Caicedonia',500000],  
            ['camilo','Bogota',45,'Cali',700000],
            ['camilo','Bogota',17,'Cali',500000],          
        ];

        foreach ($mis_usuarios as $key => $value) {
            DB::table('usuarios')->insert([
                'nombre'=> $value[0],
                'direccion'=>$value[1],
                'edad'=>$value[2],
                'ciudad'=>$value[3],
                'sueldo'=>$value[4],
                'created_at'=> Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
