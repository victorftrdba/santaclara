<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Expense extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'expense_date',
        'type',
        'provider_name',
        'code',
        'value',
        'discount',
        'total',
        'payment_date',
        'source_account',
        'source_account_type',
        "unity_id",
        'observations',
    ];

    public function unity()
    {
        return $this->belongsTo(Unity::class);
    }
}