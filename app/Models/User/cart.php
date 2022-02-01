<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    protected $table = 'cart';
    protected $fillable = [
        'userid','productid','quantity','status','ipAddress'
    ];

    public function cart()
    {
        return $this->belongsTo('App\Models\Admin\Products','productid');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User','userid');
    }
}
