<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    public function definition(): array
    {
        // Garante datas lógicas: o evento termina APÓS começar
        $startsAt = $this->faker->dateTimeBetween('now', '+3 months');
        $endsAt = $this->faker->dateTimeBetween($startsAt, $startsAt->format('Y-m-d H:i:s') . ' +6 hours');

        return [
            // Se o usuário não for passado, cria um usuário novo automaticamente
            'user_id' => User::factory(), 
            
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->paragraphs(2, true),
            'category' => $this->faker->randomElement(['Conferência', 'Workshop', 'Show', 'Meetup', 'Esporte']),
            
            // Localização realista (Pt-BR)
            'location' => $this->faker->company() . ' Arena',
            'address' => $this->faker->streetAddress(),
            'city' => $this->faker->city(),
            'state' => $this->faker->stateAbbr(), // Gera siglas como SP, RJ, GO
            
            'starts_at' => $startsAt,
            'ends_at' => $endsAt,
            'image_path' => 'events/default-' . $this->faker->numberBetween(1, 5) . '.jpg', // Evita URLs lentas de imagens externas
            
            // Status variados para testar filtros na listagem
            'status' => $this->faker->randomElement(['draft', 'published', 'canceled']),
        ];
    }

    /**
     * Estado para forçar eventos ativos/publicados se necessário nos testes
     */
    public function published(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'published',
        ]);
    }
}