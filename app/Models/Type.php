<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Type extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function service() {
        return $this->hasMany(Service::class, 'type_id');
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
