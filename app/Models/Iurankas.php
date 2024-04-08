<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iurankas extends Model
{
    use HasFactory;
    protected $table = 'iuran_kas_table';

    protected $guarded = ['id'];

    public $timestamps = false;
}
