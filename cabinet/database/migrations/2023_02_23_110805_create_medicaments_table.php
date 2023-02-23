<?php

use App\Models\TypeMedicament;
use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('medicaments', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->integer('prix')->default(0);
            $table->longText('posologie');
            $table->integer('quantite_disponible')->default(0);
            $table->integer('quantite_alerte')->default(0);
            $table->foreignIdFor(User::class)->nullable()->constrained();
            $table->foreignIdFor(TypeMedicament::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicaments');
    }
};
