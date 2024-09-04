<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id(); // Cria uma coluna ID auto-incremental
            $table->unsignedBigInteger('event_id'); // ID do evento ao qual o participante está inscrito
            $table->string('name'); // Nome do participante
            $table->string('email')->unique(); // Email do participante
            $table->timestamps(); // Cria as colunas created_at e updated_at

            // Adiciona a chave estrangeira para a tabela events
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants'); // Remove a tabela participants se necessário
    }
}
