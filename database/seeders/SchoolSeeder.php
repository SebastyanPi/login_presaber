<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\school;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $school1 = school::create(['name' => 'Jose Mejia Uribe','municipio' => 'La Gloria', 'departamento' => 'Cesar' ]);
        $school2 = school::create(['name' => 'El Integrado','municipio' => 'La Gloria', 'departamento' => 'Cesar']);
    }
}
