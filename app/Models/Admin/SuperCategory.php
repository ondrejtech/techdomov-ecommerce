<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SuperCategory extends Model
{
    use HasFactory;

    protected $table = 'super_categories';

    protected $fillable = [
        'SuperCategoryCode',
        'SuperCategoryName',
        'ParentSuperCategoryCode'
    ];

    // Vztah pro nadřazenou kategorii
    public function parent()
    {
        return $this->belongsTo(SuperCategory::class, 'ParentSuperCategoryCode', 'SuperCategoryCode');
    }

    // Vztah pro podřazené kategorie
    public function children()
    {
        return $this->hasMany(SuperCategory::class, 'ParentSuperCategoryCode', 'SuperCategoryCode');
    }

    public function childrenCategory(): HasMany
    {
        return $this->hasMany(Category::class, 'SuperCategoryCode', 'SuperCategoryCode');
    }
}
