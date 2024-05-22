<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usulanwarga extends Model
{
    use HasFactory;
    protected $table = 'usulan_warga';

    protected $guarded = ['id'];
    
    public $timestamps = false;
}
