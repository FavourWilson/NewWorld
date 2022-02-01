<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carousel extends Model
{
    use HasFactory;
    protected $table = 'carousel';
    protected $fillable = [
      'adsname','productname','images','price'  
    ];
}
