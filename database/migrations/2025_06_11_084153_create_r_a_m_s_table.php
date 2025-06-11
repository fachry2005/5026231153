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
    Schema::create('r_a_m_s', function (Blueprint $table) {
        $table->id(); // Field 1
        $table->string('merkRAM', 25); // Field 2
        $table->integer('hargaRAM'); // Field 3
        $table->boolean('tersedia'); // Field 4
        $table->float('berat'); // Field 5
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_a_m_s');
    }
};
