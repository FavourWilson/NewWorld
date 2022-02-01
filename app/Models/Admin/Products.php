<?php

namespace App\Models\Admin;

use App\Enums\Categories;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use CloudinaryLabs\CloudinaryLaravel\MediaAlly;

class Products extends Model
{
    use HasFactory;
    use MediaAlly;
   
    protected $table = 'products';
    protected $fillable = [
    'productName', 'categoriesid','subcatergoriesid','quantity','windowsOS','CPU','processor','RAM','Color','Screensize','storage','price','photo','video'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Admin\Category','categoriesid');
    }

    public function subcategory()
    {
        return $this->belongsTo('App\Models\Admin\Subcategory','subcatergoriesid');
    }

   

    
}
