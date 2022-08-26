<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori02 extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function butir()
    {
        return $this->hasMany(Butir::class);
    }

    public function kategori01()
    {
        return $this->belongsTo(Kategori01::class);
    }
}
