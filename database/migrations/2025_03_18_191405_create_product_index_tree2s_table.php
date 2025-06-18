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
        Schema::create('product_index_tree2s', function (Blueprint $table) {
            $table->id();
            $table->integer('IndexCode');
            $table->string('CommodityCode');
            $table->string('IndexName');
            $table->string('IndexSort');
            $table->string('IndexSortCode');
            $table->string('IndexLevel');
            $table->string('IndexOrder');
            $table->string('IndexCodeName');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('product_index_tree2s');
    }
};
