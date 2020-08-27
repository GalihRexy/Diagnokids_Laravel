<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diagnosa;
use App\Models\DiagnosaDetail;

class DataDiagnosaController extends Controller
{
    public function index()
    {
        $awal = microtime(true);
    	if (session()->has('email')) {
    		$email = session('email');
    		$data['diagnosa'] = Diagnosa::where(['email' => $email])->orderBy('kode_diagnosa', 'desc')->get();
    		$id = $data['diagnosa'][0]->id_anak;

            $akhir = microtime(true);
            $execute_time = $akhir - $awal;
            var_dump($execute_time);die();

    		return view('data_diagnosa', $data);
    	} else {
    		return redirect()->route('login')->with('alert-info', 'Silahkan login Terlebih dahulu...');
    	}
    }

    public function detail($id)
    {
        $data['diagnosa'] = Diagnosa::where('kode_diagnosa', $id)->first();
        $data['detail'] = DiagnosaDetail::where(['kode_diagnosa' => $id])->get();

        return view('data_diagnosa_detail', $data);
    }
}
