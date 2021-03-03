<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Masyarakat extends Authenticatable
{
    use Notifiable;
    
    protected $table = "masyarakat";

    protected $primaryKey = "nik";

    protected $fillable = [
        'nik', 'nama', 'username', 'telp', 'password',
    ];
}
