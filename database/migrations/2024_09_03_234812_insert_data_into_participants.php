<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        // Insere dados na tabela 'participants'
        DB::table('participants')->insert([
            ['event_id' => 1, 'name' => 'Heloisa Fleury', 'email' => 'heloisa.fleury@example.com'],
            ['event_id' => 1, 'name' => 'Pedro Oliveira', 'email' => 'pedro.oliveira@example.com'],
            ['event_id' => 2, 'name' => 'Lucas Pereira', 'email' => 'lucas.pereira@example.com'],
            ['event_id' => 2, 'name' => 'Juliana Almeida', 'email' => 'juliana.almeida@example.com'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        // Exclui os dados inseridos na tabela 'participants'
        DB::table('participants')->whereIn('email', [
            'heloisa.fleury@example.com',
            'pedro.oliveira@example.com',
            'lucas.pereira@example.com',
            'juliana.almeida@example.com'
        ])->delete();
    }
};
