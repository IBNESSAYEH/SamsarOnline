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
            $table->integer("etage");
            $table->integer("surface");
            $table->integer("number_rooms");
            $table->integer("number_salle");
            $table->integer("number_salle_bain");
            $table->boolean("assenceur");
            $table->boolean("balcon");
            $table->boolean("terrasse");
            $table->boolean("piscine");
            $table->boolean("jardin");
            $table->boolean("parking");

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
