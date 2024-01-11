<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id',
        'category_id',
        'image',
        'name',
        'slug',
        'estimation',
        'description',
        'price_before',
        'price_after',
        'sold',
        'status',
    ];


    public function type() {
        return $this->belongsTo(Type::class, 'type_id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }


    // TRANSACTION RELATIONAL
    public function transaction() {
        return $this->hasMany(Transaction::class, 'service_id');
    }
}
