<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('animals_pics', function (Blueprint $table) {
            $table->unsignedBigInteger("animal");
            $table->string("pics")->default("Not_found.jpg");
            $table->timestamps();

            $table->foreign("animal")->references("animalID")->on("animals");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('animals_pics', function (Blueprint $table) {
            $table->dropForeign('animals_pics_animal_foreign');
        });
        Schema::dropIfExists('animals_pics');
    }
};
