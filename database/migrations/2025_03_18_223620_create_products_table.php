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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pro_id')->unsigned();
            $table->string('code')->nullable();
            $table->string('name');
            $table->decimal('your_price', 10, 2);
            $table->decimal('your_price_with_fees', 10, 2);
            $table->string('CommodityCode')->nullable();
            $table->string('commodity_name')->nullable();
            $table->string('garbage_fee')->nullable();
            $table->string('author_fee', 10, 2)->nullable();
            $table->string('value_pack', 10, 2)->nullable();
            $table->string('value_pack_qty')->default(0)->nullable();
            $table->string('warranty')->nullable();
            $table->decimal('dealer_price', 10, 2);
            $table->decimal('end_user_price', 10, 2);
            $table->decimal('vat', 5, 2);
            $table->string('part_number')->nullable();
            $table->boolean('on_stock')->nullable();
            $table->string('on_stock_text')->nullable();
            $table->string('status')->nullable()->default('0');
            $table->string('producer_name');
            $table->string('rate_of_duty_code')->nullable();
            $table->string('ean_code')->nullable();
            $table->string('name_b2c')->nullable();
            $table->string('description_short')->nullable();
            $table->integer('multiple_quantity')->nullable();
            $table->string('price_currency')->nullable();
            $table->text('description')->nullable();
            $table->boolean('is_top')->nullable();
            $table->integer('info_code')->nullable();
            $table->integer('index_code_1')->default(-1)->nullable();
            $table->integer('index_order_1')->default(-1)->nullable();
            $table->boolean('index_implicit_1')->default(true)->nullable();
            $table->integer('index_code_2')->default(-1)->nullable();
            $table->integer('index_order_2')->default(-1)->nullable();
            $table->boolean('index_implicit_2')->default(true)->nullable();
            $table->integer('warranty_term')->nullable();
            $table->string('warranty_unit')->nullable();
            $table->string('part_number_2')->nullable();
            $table->string('date_available')->nullable();
            $table->decimal('dealer_price_1', 10, 2)->nullable();
            $table->string('unit')->nullable();
            $table->string('on_stock_count')->default(0)->nullable();
            $table->integer('img_count')->nullable();
            $table->string('img_last_changed')->nullable();
            $table->string('producer_code');
            $table->integer('category_code');
            $table->boolean('b2c')->nullable();
            $table->string('b2f_price', )->default('0')->nullable();
            $table->string('rc_status')->default('0');
            $table->string('rc_code')->nullable();
            $table->boolean('is_premium')->default(false);
            $table->timestamps();

            $table->index('pro_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('products');
    }
};
