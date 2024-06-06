<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilRW extends Model
{
    use HasFactory;
    protected $table = 'profil_rw';
    protected $guarded = [];

    protected $fillable = [
        'description',
        'image',
    ];
}
