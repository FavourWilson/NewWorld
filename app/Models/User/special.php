<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class special extends Model
{
    use HasFactory;
    protected $table = 'special';
    protected $fillable = [
        'userid','carouselid','quantity','status','ipAddress'
    ];

    public function ads()
    {
        return $this->belongsTo('App\Models\Admin\carousel','carouselid');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User','userid');
    }
}
