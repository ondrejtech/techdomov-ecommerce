<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ShoppingCart extends Model
{
    use HasFactory;

    protected $table = 'shopping_cart';
    protected $fillable = ['ProId','user_id','quantity'];
    public $timestamps = false;

    public function products(): belongsTo
    {
        return $this->belongsTo(Product::class, 'ProId', 'ProId');
    }
}
