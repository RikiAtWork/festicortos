<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Corto;

class CortosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cortos = [
            [
            'id' => 1,
            'titulo' => 'El corto más cortante',
            'director' => 'María Martín',
            'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
            adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua.'
            ],
            [
            'id' => 2,
            'titulo' => 'Sin más',
            'director' => 'Pepa Pérez',
            'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
            adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua.'
            ],
            [
            'id' => 3,
            'titulo' => 'Más o menos',
            'director' => 'Juan Jiménez',
            'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
            adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua.'
            ],
            [
            'id' => 4,
            'titulo' => 'Tira pa\' ya',
            'director' => 'Sofía Sofín',
            'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
            adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua.'
            ],
            [
            'id' => 5,
            'titulo' => 'Miedo','director' => 'Pepe Parrilla',
            'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
            adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua.'
            ]
            ];

            foreach ($cortos as $corto) {
                Corto::create($corto);
            }

    }
}
