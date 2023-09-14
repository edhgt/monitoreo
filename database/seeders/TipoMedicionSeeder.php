<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoMedicion;

class TipoMedicionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoMedicion::create(['nombre' => 'Temperatura']);
        TipoMedicion::create(['nombre' => 'Humedad']);
        TipoMedicion::create(['nombre' => 'Detección de movimiento']);
        TipoMedicion::create(['nombre' => 'Detección de humo']);
    }
}
