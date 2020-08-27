<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
	public function index()
	{
		if (session()->has('email')) {
    		return redirect()->route('home');
    	} else {
    		return view('login');
    	}
	}

	public function register()
	{
		return view('register');
	}

	public function proses_register(Request $request)
	{
		$awal = microtime(true);

		$validation = $request->validate([
				'nama' => 'required|max:150|string',
				'email' => 'required|email|unique:user,email',
				'password' => 'required|min:8',
				'password2' => 'required|same:password',
			],
			[
				'nama.required' => 'Harus diisi', 
				'email.required' => 'Harus diisi', 'email.unique' => 'email sudah digunakan',
				'password.required' => 'Harus diisi', 'password.min' => 'Password minimal 8 digit',
				'password2.required' => 'Harus diisi', 'password2.same' => 'Password tidak sama',
			]
		);

		$user = new User;

		$user->name = $request->input('nama');
		$user->email = $request->input('email');
		$user->password = password_hash($request->input('password'), PASSWORD_DEFAULT) ;

		$user->save();

		$akhir = microtime(true);
		$execute_time = $akhir - $awal;
		var_dump($execute_time);die();

		return redirect()->route('login')->with('alert-success', 'Registrasi berhasil. Silahkan login...');

	}

	public function proses_login(Request $request)
	{
		$validation = $request->validate([
				'email' => 'required|email',
				'password' => 'required|min:8',
			],
			[
				'email.required' => 'Harus diisi', 'email.email' => 'Gunakan alamat email yang valid',
				'password.required' => 'Harus diisi', 'password.min' => 'Password minimal 8 digit',
			]
		);
		
		$email = $request->input('email');
		$password = $request->input('password');

		$user = User::where('email', $email)->first();
		
		if ($user == null) {

			return redirect()->route('login')->with('alert-danger', 'Email belum terdaftar! Silahkan register...');
		}

		if (password_verify($password, $user->password)) {
			$data = [
				'name' => $user->name,
				'email' => $user->email
			];
			session()->put($data);

			return redirect()->route('home');
			
		} else {
			return redirect()->route('login')->with('alert-danger', 'Password salah! Silahkan login kembali...');
		}

	}

	public function logout()
	{
		session()->forget('email');
		return redirect()->route('login')->with('alert-success', 'Berhasil Logout!');
	}


}