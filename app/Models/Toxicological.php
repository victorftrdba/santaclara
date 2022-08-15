<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Toxicological extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        "date_exam",
        "cod_exam",
        "time_exam",
        "indicated_by",
        "client_name",
        "cpf",
        "birth_date",
        "gender",
        "email",
        "cell",
        "zipcode",
        "address",
        "complement",
        "number",
        "district",
        "state",
        "city",
        "unity_id",
        'user_id',
        "laboratory",
        "uses_psychoactive_substances",
        "examVoucher",
    ];

    public function unity()
    {
        return $this->belongsTo(Unity::class);
    }
}