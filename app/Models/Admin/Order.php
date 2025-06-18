<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\User;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = ['user_id','order_number','status'];

    public function orderItems(): HasMany
    {
        return $this->HasMany(\App\Models\Admin\OrderItem::class, 'order_number', 'order_number');
    }

    public function invoice(): BelongsTo
    {
        return $this->BelongsTo(Invoice::class, 'order_number', 'order_number');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
