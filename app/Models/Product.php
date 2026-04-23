<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type_id',
        'grade_id',
        'is_digital_id',
        'release',
        'desc',
        'stock',
        'img_url',
        'price',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function digital()
    {
        return $this->belongsTo(Digital::class, 'is_digital_id');
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}
