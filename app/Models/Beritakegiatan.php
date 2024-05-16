<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Beritakegiatan extends Model
{
    use HasFactory, Sluggable;
    protected $table = 'berita_kegiatan';
    
    protected $fillable = [
        'judul',
        'slug',
        'deskripsi',
        'isi',
        'image',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }
}
