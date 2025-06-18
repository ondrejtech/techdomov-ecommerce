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
        Schema::create('category_attributes', function (Blueprint $table) {
            $table->id();
            $table->integer('CategoryCode');
            $table->string('CategoryName');
            $table->bigInteger('AttributeCode')->unsigned();
            $table->string('AttributeName');
            $table->boolean('IsPrimary');
            $table->string('FilterOperator');
            $table->timestamps();

            $table->index('AttributeCode');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('category_attributes');
    }
};
