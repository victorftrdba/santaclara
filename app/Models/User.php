<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        "name",
        "password",
        "cpf",
        "responsability"
    ];

    public function setCpfAttribute(?string $value)
    {
        $this->attributes["cpf"] = str_replace([".", "-"], "", $value);
    }

    public function unities()
    {
        return $this->hasMany(Unity::class);
    }

    public function firstName(): string
    {
        return explode(" ", $this->name)[0];
    }
}