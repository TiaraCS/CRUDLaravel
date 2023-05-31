<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;
    // protected $table = 'karyawans';
    protected $guarded = ['id'];

    //kode kolom nama yang bisa dilist
    protected $fillable = [
        'name','email', 'address'
    ];
}