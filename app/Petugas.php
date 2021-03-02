<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $primaryKey = 'id_petugas';

    protected $fillable = [
        'nama_petugas', 'username', 'telp', 'password', 'level',
    ];
}
