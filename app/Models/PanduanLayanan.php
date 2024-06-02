<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PanduanLayanan extends Model
{
    use HasFactory;
    protected $table = 'panduan_layanan';

    protected $guarded = ['id'];
}
