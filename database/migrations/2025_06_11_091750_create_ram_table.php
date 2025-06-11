<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('ram', function (Blueprint $table) {
        $table->id(); // ID - Auto Increment Primary Key
        $table->string('merkRAM', 25); // VARCHAR(25)
        $table->integer('hargaRAM'); // INT
        $table->boolean('tersedia'); // BOOLEAN
        $table->float('berat'); // FLOAT
        $table->timestamps(); // created_at & updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ram');
    }
};
