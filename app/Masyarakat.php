<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    protected $table = "masyarakat";

    protected $primaryKey = "nik";

    protected $fillable = [
        'nik', 'nama', 'username', 'telp', 'password',
    ];
}
