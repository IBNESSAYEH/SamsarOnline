<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cracteristiques', function (Blueprint $table) {
            $table->id();
            $table->integer("etage")->nullable();
            $table->integer("surface")->nullable();
            $table->integer("number_rooms")->nullable();
            $table->integer("number_salle")->nullable();
            $table->integer("number_salle_bain")->nullable();
            $table->boolean("assenceur")->nullable();
            $table->boolean("balcon")->nullable();
            $table->boolean("terrasse")->nullable();
            $table->boolean("piscine")->nullable();
            $table->boolean("jardin")->nullable();
            $table->boolean("parking")->nullable();

            $table->foreignId('annonce_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cracteristiques');
    }
};
