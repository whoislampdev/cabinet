<?php

use App\Models\User;
use App\Models\Patient;
use App\Models\TypeTicket;
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
        Schema::create('vente_tickets', function (Blueprint $table) {
            $table->id();
            $table->date('date_vente');
            $table->time('heure_vente');
            $table->foreignIdFor(User::class)->nullable()->constrained();
            $table->foreignIdFor(TypeTicket::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vente_tickets');
    }
};
