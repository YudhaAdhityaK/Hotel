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
        Schema::create('reservations', function (Blueprint $table) {
              $table->id();
        $table->string('nama_tamu');
        $table->string('nomer_kamar');
        $table->date('check_in');
        $table->date('check_out');
        $table->string('status'); // Reserved, Checked-in, Checked-out
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
