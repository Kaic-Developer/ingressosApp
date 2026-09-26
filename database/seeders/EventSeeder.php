<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Pega o primeiro usuário do banco ou cria um novo se não existir
        $devUser = User::first() ?? User::factory()->create([
            'name' => 'Desenvolvedor',
            'email' => 'dev@teste.com',
        ]);

        // 2. Cria 5 eventos publicados associados ao seu usuário principal
        Event::factory(5)
            ->published()
            ->create([
                'user_id' => $devUser->id,
            ]);

        // 3. Cria 15 eventos diversos (com status e usuários aleatórios)
        Event::factory(15)->create();
    }
}