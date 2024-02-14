<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelKaryawan extends Model
{
    use HasFactory;
    protected $table = 'tabel_karyawan';
    // protected $fillable = ['nama', 'identification']
    protected $guarded = [];
}
