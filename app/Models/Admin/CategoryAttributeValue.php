<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryAttributeValue extends Model
{
    use HasFactory;

    protected $table = 'attribute_values';

    protected $fillable = [
        'ValueCode',
        'AttributeCode',
        'Value',
        'ValueSort'
    ];

    public function categoryAttribute()
    {
        return $this->belongsTo(CategoryAttribute::class, 'AttributeCode', 'AttributeCode');
    }
}
