<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $table = 'subcategory';
    protected $fillable = [
        'brandname','categoriesid'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Admin\Category','categoriesid');
    }
}
