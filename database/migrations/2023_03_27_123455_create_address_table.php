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
        Schema::create('address', function (Blueprint $table) {
            $table->id();
            $table->string("address")->unique();
            $table->string("town");
            $table->unsignedBigInteger("owner");
            $table->date("updated_at")->default("2000-01-01 00:00:00");
            $table->date("created_at")->default("2000-01-01 00:00:00");

            $table->foreign("owner")->references('id')->on("users");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('address', function (Blueprint $table) {
            $table->dropForeign('location_owner_foreign');
        });
        Schema::dropIfExists('users');
    }
};
