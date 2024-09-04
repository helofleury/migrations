<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id(); // Cria uma coluna ID auto-incremental
            $table->string('title'); // Título do evento
            $table->text('description')->nullable(); // Descrição do evento
            $table->dateTime('start_datetime'); // Data e hora de início do evento
            $table->dateTime('end_datetime')->nullable(); // Data e hora de término do evento
            $table->string('location')->nullable(); // Localização do evento
            $table->timestamps(); // Cria as colunas created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events'); // Remove a tabela events se necessário
    }
}

