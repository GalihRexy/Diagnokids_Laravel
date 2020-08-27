<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Anak;

class ProfileController extends Controller
{
    public function index()
    {
    	if (session()->has('email')) {
    		$data['name'] = session('name');
    		$email = session('email');
    		$data['anak'] = Anak::where('email', $email)->get();

    		return view('profile', $data);
    	} else {
    		return redirect()->route('login')->with('alert-info', 'Silahkan login Terlebih dahulu...');
    	}
    }

    public function tambah_data_anak(Request $request)
    {
        $awal = microtime(true);
        $nama = $request->input('nama');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $umur = $request->input('umur');

        $anak = new Anak;

        $anak->email = session('email');
        $anak->nama = $nama;
        $anak->jenis_kelamin = $jenis_kelamin;
        $anak->umur = $umur;

        $anak->save();

        $akhir = microtime(true);
        $execute_time = $akhir - $awal;
        var_dump($execute_time);die();

        return redirect()->route('profile')->with('alert-success', 'Data berhasil ditambahkan...');
    }
}
