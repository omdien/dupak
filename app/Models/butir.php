<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class butir extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function kategori02()
    {
        return $this->belongsTo(Kategori02::class);
    }
}
