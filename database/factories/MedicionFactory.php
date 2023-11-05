<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medicion>
 */
class MedicionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'valor' => rand(1,100),
            'dispositivo_id' => \App\Models\Dispositivo::all()->random()->id,
            'tipo_medicion_id' => \App\Models\TipoMedicion::all()->random()->id
        ];
    }
}
