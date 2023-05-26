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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("animal");
            $table->longText("feedback");
            $table->integer('rate');
            $table->timestamps();

            $table->foreign("animal")->references("animalID")->on("animals");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('feedback', function (Blueprint $table) {
            $table->dropForeign('feedback_address_foreign');
        });
        Schema::dropIfExists('feedback');
    }
};
