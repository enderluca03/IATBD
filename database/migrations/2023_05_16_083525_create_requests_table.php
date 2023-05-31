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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger("owner");
            $table->unsignedBigInteger("animal");
            $table->boolean("accepted")->default(false);

            $table->foreign("owner")->references('id')->on("users")->onDelete('cascade');;
            $table->foreign("animal")->references("animalID")->on("animals")->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('requests', function (Blueprint $table) {
            $table->dropForeign('animals_owner_foreign');
            $table->dropForeign('animals_animalID_foreign');
        });
        Schema::dropIfExists('requests');
    }
};
