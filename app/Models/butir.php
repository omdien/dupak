<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class butir extends Model
{
    use HasFactory,Sluggable;

    protected $guarded = ['id'];

    public function kategori02()
    {
        return $this->belongsTo(Kategori02::class);
    }

    public function getRouteKeyName()
    {
        return 'but_slug';
    }

    public function sluggable(): array
    {
        return [
            'but_slug' => [
                'source' => 'but_kegiatan'
            ]
        ];
    }
}
