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
        Schema::create('producers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ProducerId')->unsigned();
            $table->string('ProducerCode')->unique();
            $table->string('ProducerName');
            $table->timestamps();

            $table->index('ProducerId');
            $table->index('ProducerCode');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('producers');
    }
};
