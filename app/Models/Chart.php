<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chart extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id_user',
        'id_product'
    ];

    public function user () {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function product () {
        return $this->belongsTo(Product::class, 'id_product');
    }
}
