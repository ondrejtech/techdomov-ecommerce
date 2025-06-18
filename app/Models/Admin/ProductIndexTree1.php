<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductIndexTree1 extends Model
{
    use HasFactory;

    protected $table = 'product_index_tree1s'; // Název tabulky

    protected $fillable = [
        'IndexCode',
        'CommodityCode', // Cizí klíč na commodities
        'IndexName',
        'IndexSort',
        'IndexSortCode',
        'IndexLevel',
        'IndexOrder',
        'IndexCodeName',
    ];

    public function commodity()
    {
        return $this->belongsTo(Commodity::class, 'CommodityCode', 'CommodityCode');
    }

}
