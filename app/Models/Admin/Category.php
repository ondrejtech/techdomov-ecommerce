<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $casts = [
        'IsPrimary' => 'boolean',
    ];

    protected $fillable = [
        'CategoryCode',
        'CategoryName',
        'ImageURL',
        'AttributeCode',
        'AttributeName',
        'IsPrimary',
        'FilterOperator',
        'ImageList'
    ];

    public function superCategory()
    {
        return $this->belongsTo(\App\Models\Admin\SuperCategory::class, 'SuperCategoryCode', 'SuperCategoryCode');
    }

    public function childrenCategory(): hasMany
    {
        return $this->hasMany(Category::class, 'SuperCategoryCode', 'SuperCategoryCode');
    }
}
