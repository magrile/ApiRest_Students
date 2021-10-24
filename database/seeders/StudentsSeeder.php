<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
        	[
	        	'nombre' => 'Alex Oscar',
	        	'apellido' => 'Gamarra Solis',
	        	'edad' => 28,
	        	'sexo' => 'Masculino',
	        	'dni' => 70218511,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
	        	
        	],
        	[
	        	'nombre' => 'María Perla',
	        	'apellido' => 'Saruc Main',
	        	'edad' => 34,
	        	'sexo' => 'Femenino',
	        	'dni' => 80218522,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
        	],
        	[
	        	'nombre' => 'Julio Ramón',
	        	'apellido' => 'Quiroga Hasher',
	        	'edad' => 52,
	        	'sexo' => 'Masculino',
	        	'dni' => 23219913,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
	        	
        	],
        	[
        		'nombre' => 'Mario Idalgo',
				'apellido' => 'Cuerbo Nieto',
				'edad' => 18,
				'sexo' => 'Masculino',
				'dni' => 80218511,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
				
        	],
        	[
        		'nombre' => 'María Rosa',
        		'apellido' => 'Jara Uri',
				'edad' => 40,
				'sexo' => 'Femenino',
				'dni' => 62215777,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
				
        	],
        	[
        		'nombre' => 'Kevin Juan',
				'apellido' => 'Rodriguez Ezquivel',
				'edad' => 49,
				'sexo' => 'Masculino',
				'dni' => 78218555,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
				
        	],
        	[
        		'nombre' => 'Cielo Celeste',
				'apellido' => 'Lázaro Peterson',
				'edad' => 50,
				'sexo' => 'Femenino',
				'dni' => 23888591,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
				
        	]
        ]);
    }
}
