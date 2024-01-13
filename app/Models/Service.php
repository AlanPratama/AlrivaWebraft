<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Service extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'type_id',
        'category_id',
        'image',
        'image_link',
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



    // WISHLIST RELATIONAL
    public function wishlist() {
        return $this->hasMany(Wishlist::class, 'service_id');
    }


    // TRANSACTION RELATIONAL
    public function transaction() {
        return $this->hasMany(Transaction::class, 'service_id');
    }



    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
