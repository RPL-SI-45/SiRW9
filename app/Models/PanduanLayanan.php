<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable;
use Cviebrock\EloquentSluggable\Sluggable;

class PanduanLayanan extends Model
{
    use HasFactory;
    use Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' =>
            [
                'source' => 'Judul_Panduan'
            ]
            ];
    }
    
    protected $table = 'panduan_layanan';

    protected $guarded = ['id'];
}
