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
        Schema::create('animals', function (Blueprint $table) {
            $table->id("animalID");
            $table->string("name");
            $table->integer("age");
            $table->string("species");
            $table->unsignedBigInteger("owner");
            $table->longText("note");
            $table->date("updated_at")->default("2000-01-01 00:00:00");
            $table->date("created_at")->default("2000-01-01 00:00:00");

            $table->foreign("species")->references("species")->on("animal_species");
            $table->foreign("owner")->references('id')->on("users");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('animals', function (Blueprint $table) {
            $table->dropForeign('animal_species_foreign');
            $table->dropForeign('animals_owner_foreign');
        });
        Schema::dropIfExists('animals');
    }
};
