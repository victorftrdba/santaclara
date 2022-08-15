<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Several extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'date',
        'hour',
        'quantity',
        'value',
        'payment_method',
        'type',
        'who_receives',
        'observations',
    ];
}