<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryAttribute extends Model
{
    use HasFactory;

    protected $table = 'category_attributes';

    protected $casts = [
        'IsPrimary' => 'boolean',
    ];

    protected $fillable = [
        'CategoryCode',
        'CategoryName',
        'AttributeCode',
        'AttributeName',
        'IsPrimary',
        'FilterOperator'
    ];

    public function categoryAttributeValues()
    {
        return $this->hasMany(CategoryAttributeValue::class, 'AttributeCode', 'AttributeCode');
    }
}
