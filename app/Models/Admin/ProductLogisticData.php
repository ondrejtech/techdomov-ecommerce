<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductLogisticData extends Model
{
    use HasFactory;

    protected $table = 'product_logistic';
    protected $fillable = [
        'typ',
        'count',
        'weight',
        'length',
        'width',
        'height'
    ];

}
