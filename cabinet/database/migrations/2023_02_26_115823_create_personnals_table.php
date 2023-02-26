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
        Schema::create('personnals', function (Blueprint $table) {
            $table->id();
            $table->string('prenom');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('adresse');
            $table->string('telephone');
            $table->string('fonction');
            // $table->string('password');
            // $table->string('role');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnals');
    }
};
