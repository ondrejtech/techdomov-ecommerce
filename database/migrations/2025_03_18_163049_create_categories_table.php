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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('CategoryCode')->unsigned()->unique();
            $table->string('CategoryName');
            $table->string('ImageURL');
            $table->integer('AttributeCode')->nullable();
            $table->string('AttributeName')->nullable();
            $table->boolean('IsPrimary')->nullable();
            $table->string('FilterOperator')->nullable();
            $table->timestamps();

            $table->index('CategoryCode');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('categories');
    }
};
