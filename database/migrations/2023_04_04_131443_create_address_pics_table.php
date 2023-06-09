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
        Schema::create('address_pics', function (Blueprint $table) {
            $table->string("address");
            $table->string("pics")->default("Not_found.jpg");
            $table->timestamps();

            $table->foreign("address")->references("address")->on("address")->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('address_pics', function (Blueprint $table) {
            $table->dropForeign('address_pics_address_foreign');
        });
        Schema::dropIfExists('address_pics');
    }
};
