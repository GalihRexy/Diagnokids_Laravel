<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Diagnosa extends Model
{
    protected $table = 'diagnosa';
    protected $primaryKey = 'kode_diagnosa';
    public $timestamps = false;

    protected $fillable = [
       'email', 'id_anak', 'date_created',
    ];



    public function getLast($email, $id_anak)
    {
    	$diagnosa = DB::table('diagnosa')->where(['email' => $email, 'id_anak' => $id_anak])->orderBy('kode_diagnosa', 'desc')->first();
        
        return $diagnosa;
    }

    public function getNama($id)
    {
        $nama = DB::table('anak')->where(['id' => $id])->first();
        
        return $nama->nama;
    }

}
