<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kegiatan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function butir()
    {
        return $this->belongsTo(butir::class);
    }

    public function getRouteKeyName()
    {
        return 'keg_slug';
    }
}
