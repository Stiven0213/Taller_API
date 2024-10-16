<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Videojuego>
 */
class VideojuegoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence(3),
            'genero' => $this->faker->randomElement(['Acción', 'Aventura', 'Deportes', 'RPG', 'Estrategia']),
            'plataforma' => $this->faker->randomElement(['PS5', 'PC', 'Xbox', 'Switch']),
            'anio_lanzamiento' => $this->faker->year(),
            'desarrollador' => $this->faker->company(),
            'precio' => $this->faker->randomFloat(2, 20, 60),
            'calificacion' => $this->faker->randomFloat(1, 1, 10),
            'disponible' => $this->faker->boolean(),
            'fecha_publicacion' => $this->faker->date(),
        ];
    }
}
