<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DiagnosaDetail extends Model
{
    protected $table = 'diagnosa_detail';
    protected $primaryKey = 'kode_diagnosa_detail';
    public $timestamps = false;

    protected $fillable = [
       'kode_diagnosa', 'kode_gejala', 'kode_penyakit', 'date_created',
    ];

    public function getGejala($kode_gejala)
    {
    	$keterangan = DB::table('gejala_return')->where(['kode_gejala_return' => $kode_gejala])->first();
    	$result = $keterangan->keterangan;
    	
    	return $result;
    }

    public function getPenyakit($kode_gejala)
    {
    	$gejala = DB::table('gejala_return')->where(['kode_gejala_return' => $kode_gejala])->first();
    	$penyakit = DB::table('penyakit')->where(['kode_penyakit' => $gejala->kode_penyakit])->first();
    	$result = $penyakit->nama;
    	
    	return $result;
    }


}
