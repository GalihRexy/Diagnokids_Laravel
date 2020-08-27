<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    protected $table = 'anak';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
       'email', 'nama', 'jenis_kelamin', 'umur',
    ];


}
