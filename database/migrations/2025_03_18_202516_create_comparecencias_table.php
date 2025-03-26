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
        Schema::create('comparecencias', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fechahora');
            $table->string('comparecencia', 100);
            $table->integer('legislatura_id')->unsigned();
            $table->timestamps();

            $table->foreign('legislatura_id')->references('id')->on('catlegislaturas');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comparecencias');
    }
};
