<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'user_id',
        'service_id',
        'message',
        'total_price',
        'date_start',
        'estimation',
        'date_end',
        'status',
        'reason',
    ];


    public function users() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function services() {
        return $this->belongsTo(Service::class, 'service_id');
    }

}
