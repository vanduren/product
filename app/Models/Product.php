<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    // scopefilter works with scope in front of method
    // then use it in for instance in index method of controller
    // scope takes two param 1. query and 2. array
    public function scopeSearchFilter($query, array $searchFilters)
    {
        if($searchFilters['search'] ?? false){
            // the query are products (from controller)
            return $query->where('name', 'like', '%' . $searchFilters['search'] . '%')
                        ->orWhere('description', 'like', '%' . $searchFilters['search'] . '%');
        }

        // if($searchFilters['category_id'] ?? false){
        //     return $query->where('category_id', '=', $searchFilters['category_id'] . '%');
        // }
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
