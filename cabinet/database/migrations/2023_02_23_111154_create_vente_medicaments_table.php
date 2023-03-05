<?php

use App\Models\Medicament;
use App\Models\Ticket;
use App\Models\User;
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
        Schema::create('vente_medicaments', function (Blueprint $table) {
            $table->id(); 
            $table->integer('quantite');
            $table->foreignIdFor(User::class)->nullable();
            $table->foreignIdFor(Ticket::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignIdFor(Medicament::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vente_medicaments');
    }
};
