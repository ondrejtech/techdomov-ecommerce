<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commodity extends Model
{
    use HasFactory;

    protected $table = 'commodities';

    protected $fillable =[
        'CommodityCode',
        'CommodityName',
        'CommodityParentCode'
    ];
}
