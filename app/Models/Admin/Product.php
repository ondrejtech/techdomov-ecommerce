<?php

namespace App\Models\Admin;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Product extends Model
{
    use HasFactory;

    protected $table = 'products';


    protected $primaryKey = 'ProId';


    protected $fillable = [
        'pro_id',
        'code',
        'name',
        'your_price',
        'your_price_with_fees',
        'commodity_code',
        'garbage_fee',
        'author_fee',
        'value_pack',
        'value_pack_qty',
        'warranty',
        'commodity_name',
        'dealer_price',
        'end_user_price',
        'vat',
        'part_number',
        'on_stock',
        'on_stock_text',
        'status',
        'producer_name',
        'rate_of_duty_code',
        'ean_code',
        'name_b2c',
        'description_short',
        'multiple_quantity',
        'price_currency',
        'description',
        'is_top',
        'info_code',
        'index_code_1',
        'index_order_1',
        'index_implicit_1',
        'index_code_2',
        'index_order_2',
        'index_implicit_2',
        'warranty_term',
        'warranty_unit',
        'part_number_2',
        'date_available',
        'dealer_price_1',
        'unit',
        'on_stock_count',
        'img_count',
        'img_last_changed',
        'producer_code',
        'category_code',
        'b2c',
        'b2f_price',
        'rc_status',
        'rc_code',
        'is_premium'
    ];

    protected $casts = [
        'your_price' => 'decimal:2',
        'your_price_with_fees' => 'decimal:2',
        'garbage_fee' => 'decimal:2',
        'author_fee' => 'decimal:2',
        'value_pack' => 'decimal:2',
        'value_pack_qty' => 'decimal:2',
        'dealer_price' => 'decimal:2',
        'end_user_price' => 'decimal:2',
        'vat' => 'decimal:2',
        'on_stock_count' => 'decimal:2',
        'dealer_price_1' => 'decimal:2',
        'b2f_price' => 'decimal:2',
    ];

    public function images(): HasMany
    {
        return $this->hasMany(ProductImages::class,'ProId','ProId');
    }

    public function logisticData()
    {
        return $this->hasMany(ProductLogisticData::class, 'ProId', 'ProId'); // Správný cizí klíč
    }

    public function categories(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'CategoryCode', 'CategoryCode');
    }
}
