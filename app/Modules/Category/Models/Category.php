<?php

namespace App\Modules\Category\Models;

use Database\Factories\CategoryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable
    =[
        'id',
        'name',
        'slug',
        'parent_id',
        // 'description',
    ];


    public function parent() {

        return $this->belongsTo(Category::class, 'parent_id', 'id');

    }

    public function children() {

        return $this->hasMany(Category::class, 'parent_id', 'id');

    }

        protected static function newFactory()
    {
        return CategoryFactory::new();
    }
}
