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
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->timestamp('date_publication');
            $table->timestamp('date_construction');
            $table->string('phone');
            $table->string('email');
            $table->string('adresse');
            $table->integer('month_price')->default(0);
            $table->integer('week_price')->default(0);
            $table->integer('day_price')->default(0);
            $table->integer('hour_price')->default(0);
            $table->string('sataut')->default('disponible');


            $table->foreignId('category_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('user_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('type_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('city_id')
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
        Schema::dropIfExists('annonces');
    }
};
