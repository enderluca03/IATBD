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
        Schema::create('search', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("owner");
            $table->unsignedBigInteger("animal");
            $table->dateTime("from");
            $table->dateTime("to");
            $table->double("payment", 5, 2);
            $table->timestamps();


            $table->foreign("owner")->references("id")->on("users")->onDelete('cascade');;
            $table->foreign("animal")->references("animalID")->on("animals")->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('search', function (Blueprint $table) {
            $table->dropForeign('searching_owner_foreign');
            $table->dropForeign('searching_for_foreign');
        });
        Schema::dropIfExists('search');
    }
};
