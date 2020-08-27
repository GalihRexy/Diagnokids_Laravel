<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Anak;
use App\Models\Keluhan;
use App\Models\Gejala;
use App\Models\Diagnosa;
use App\Models\DiagnosaDetail;

class DiagnosaController extends Controller
{
    public function index()
    {
    	if (session()->has('email')) {
    		$email = session('email');
    		$data['anak'] = Anak::where('email', $email)->get();

    		return view('diagnosa', $data);
    	} else {
    		return redirect()->route('login')->with('alert-info', 'Silahkan login Terlebih dahulu...');
    	}
    }

    public function diagnosa_keluhan($id)
    {
    	session()->put('id_anak', $id);
        $data['keluhan'] = Keluhan::get();

        return view('diagnosa_keluhan', $data);
    }


    public function diagnosa_gejala(Request $request)
    {
        $keluhan = $request->input('keluhan');

        if (isset($keluhan)) {
            for ($i = 0; $i < count($keluhan); $i++) {
                if ($keluhan[$i] == 'K1') {
                    session()->flash('K1', 'K1');
                } else if ($keluhan[$i] == 'K2') {
                    session()->flash('K2', 'K2');
                } else if ($keluhan[$i] == 'K3') {
                    session()->flash('K3', 'K3');
                }
            }   
        }

        $data['gejala'] = Gejala::get();

        return view('diagnosa_gejala', $data);
    }

    public function diagnosa_proses(Request $request)
    {
        $awal = microtime(true);

        // Insert Diagnosa
        $diagnosa = new Diagnosa;

        $diagnosa->email = session('email');
        $diagnosa->id_anak = session('id_anak');
        $diagnosa->date_created = time();

        $diagnosa->save();
        // End insert diagnosa

        $gejala = $request->input('gejala');

        $k1 = session('K1');
        $k2 = session('K2');
        $k3 = session('K3');
        

        // Definikan variable
        $diagnosaModel = new Diagnosa();
        $dDetail = new DiagnosaDetail();
        $email = session('email');
        $id_anak = session('id_anak');


        //Penyakit pertama
        for ($i = 0; $i < count($gejala); $i++) {
            if ($gejala[$i] == 'GJL/001') {
                $diagnosa = $diagnosaModel->getLast($email, $id_anak);

                $p1 = 'PYKT/001';
                $data = [
                    'kode_diagnosa' => $diagnosa->kode_diagnosa,
                    'kode_gejala' => 'GJL/001',
                    'kode_penyakit' => 'PYKT/001',
                    'date_created' => time(),
                ];

                $dDetail->insert($data);
            } else if ($gejala[$i] == 'GJL/002') {
                $diagnosa = $diagnosaModel->getLast($email, $id_anak);

                $p1 = 'PYKT/001';
                $data = [
                    'kode_diagnosa' => $diagnosa->kode_diagnosa,
                    'kode_gejala' => 'GJL/002',
                    'kode_penyakit' => 'PYKT/001',
                    'date_created' => time(),
                ];

                $dDetail->insert($data);
            } else if ($gejala[$i] == 'GJL/003') {
                $diagnosa = $diagnosaModel->getLast($email, $id_anak);

                $p1 = 'PYKT/001';
                $data = [
                    'kode_diagnosa' => $diagnosa->kode_diagnosa,
                    'kode_gejala' => 'GJL/003',
                    'kode_penyakit' => 'PYKT/001',
                    'date_created' => time(),
                ];

                $dDetail->insert($data);
            } else if ($gejala[$i] == 'GJL/004') {
                $diagnosa = $diagnosaModel->getLast($email, $id_anak);

                $p1 = 'PYKT/001';
                $data = [
                    'kode_diagnosa' => $diagnosa->kode_diagnosa,
                    'kode_gejala' => 'GJL/004',
                    'kode_penyakit' => 'PYKT/001',
                    'date_created' => time(),
                ];

                $dDetail->insert($data);
            }
        }


        //Penyakit kedua
        for ($i = 0; $i < count($gejala); $i++) {
            if ($gejala[$i] == 'GJL/005') {
                if (isset($k1)) {
                    $diagnosa = $diagnosaModel->getLast($email, $id_anak);

                    $data = [
                        'kode_diagnosa' => $diagnosa->kode_diagnosa,
                        'kode_gejala' => 'K1 & GJL/005',
                        'kode_penyakit' => 'PYKT/002',
                        'date_created' => time(),
                    ];

                    $dDetail->insert($data);
                }
            }
        }

        //Penyakit ketiga
        for ($i = 0; $i < count($gejala); $i++) {
            if ($gejala[$i] == 'GJL/006') {
                if (isset($k1)) {
                    $diagnosa = $diagnosaModel->getLast($email, $id_anak);
                    $data = [
                        'kode_diagnosa' => $diagnosa->kode_diagnosa,
                        'kode_gejala' => 'K1 & GJL/006',
                        'kode_penyakit' => 'PYKT/003',
                        'date_created' => time(),
                    ];

                    $dDetail->insert($data);
                }
            }
        }

        //Penyakit keempat
        if (isset($k1) && isset($p1)) {
            $diagnosa = $diagnosaModel->getLast($email, $id_anak);
            $data = [
                'kode_diagnosa' => $diagnosa->kode_diagnosa,
                'kode_gejala' => 'K1 & PYKT/001',
                'kode_penyakit' => 'PYKT/004',
                'date_created' => time(),
            ];

            $dDetail->insert($data);
        }

        for ($i = 0; $i < count($gejala); $i++) {
            if ($gejala[$i] == 'GJL/007') {
                $diagnosa = $diagnosaModel->getLast($email, $id_anak);
                $data = [
                    'kode_diagnosa' => $diagnosa->kode_diagnosa,
                    'kode_gejala' => 'GJL/007',
                    'kode_penyakit' => 'PYKT/004',
                    'date_created' => time(),
                ];

                $dDetail->insert($data);
            }
        }

        for ($i = 0; $i < count($gejala); $i++) {
            if ($gejala[$i] == 'GJL/008') {
                $diagnosa = $diagnosaModel->getLast($email, $id_anak);
                $data = [
                    'kode_diagnosa' => $diagnosa->kode_diagnosa,
                    'kode_gejala' => 'GJL/008',
                    'kode_penyakit' => 'PYKT/004',
                    'date_created' => time(),
                ];

                $dDetail->insert($data);
            }
        }

        //Penyakit kelima
        if (isset($k2)) {
            for ($i = 0; $i < count($gejala); $i++) {
                if ($gejala[$i] == 'GJL/009') {
                    $diagnosa = $diagnosaModel->getLast($email, $id_anak);
                    $p5 = 'PYKT/005';
                    $data = [
                        'kode_diagnosa' => $diagnosa->kode_diagnosa,
                        'kode_gejala' => 'K2 & GJL/009',
                        'kode_penyakit' => 'PYKT/005',
                        'date_created' => time(),
                    ];

                    $dDetail->insert($data);
                }
            }
        }

        //Penyakit keenam
        if (isset($p5)) {
            for ($i = 0; $i < count($gejala); $i++) {
                if ($gejala[$i] == 'GJL/010') {
                    for ($j = 0; $j < count($gejala); $j++) {
                        if ($gejala[$j] == 'GJL/011') {
                            $diagnosa = $diagnosaModel->getLast($email, $id_anak);
                            $p6 = 'PYKT/006';
                            $data = [
                                'kode_diagnosa' => $diagnosa->kode_diagnosa,
                                'kode_gejala' => 'P5 & GJL/010 & GJL/011',
                                'kode_penyakit' => 'PYKT/006',
                                'date_created' => time(),
                            ];

                            $dDetail->insert($data);
                        }
                    }
                }
            }
        }

        for ($i = 0; $i < count($gejala); $i++) {
            if ($gejala[$i] == 'GJL/012') {
                $diagnosa = $diagnosaModel->getLast($email, $id_anak);
                $p6 = 'PYKT/006';
                $data = [
                    'kode_diagnosa' => $diagnosa->kode_diagnosa,
                    'kode_gejala' => 'GJL/012',
                    'kode_penyakit' => 'PYKT/006',
                    'date_created' => time(),
                ];

                $dDetail->insert($data);
            }
        }

        for ($i = 0; $i < count($gejala); $i++) {
            if ($gejala[$i] == 'GJL/013') {
                $diagnosa = $diagnosaModel->getLast($email, $id_anak);
                $p6 = 'PYKT/006';
                $data = [
                    'kode_diagnosa' => $diagnosa->kode_diagnosa,
                    'kode_gejala' => 'GJL/013',
                    'kode_penyakit' => 'PYKT/006',
                    'date_created' => time(),
                ];

                $dDetail->insert($data);
            }
        }

        //Penyakit ketujuh
        if (isset($p5)) {
            for ($i = 0; $i < count($gejala); $i++) {
                if ($gejala[$i] == 'GJL/010') {
                    for ($j = 0; $j < count($gejala); $j++) {
                        if ($gejala[$j] == 'GJL/014') {
                            $diagnosa = $diagnosaModel->getLast($email, $id_anak);

                            $data = [
                                'kode_diagnosa' => $diagnosa->kode_diagnosa,
                                'kode_gejala' => 'P5 & GJL/010 & GJL/014',
                                'kode_penyakit' => 'PYKT/007',
                                'date_created' => time(),
                            ];

                            $dDetail->insert($data);
                        }
                    }
                }
            }
        }

        for ($i = 0; $i < count($gejala); $i++) {
            if ($gejala[$i] == 'GJL/015') {
                $diagnosa = $diagnosaModel->getLast($email, $id_anak);

                $data = [
                    'kode_diagnosa' => $diagnosa->kode_diagnosa,
                    'kode_gejala' => 'GJL/015',
                    'kode_penyakit' => 'PYKT/007',
                    'date_created' => time(),
                ];

                $dDetail->insert($data);
            }
        }

        for ($i = 0; $i < count($gejala); $i++) {
            if ($gejala[$i] == 'GJL/016') {
                $diagnosa = $diagnosaModel->getLast($email, $id_anak);

                $data = [
                    'kode_diagnosa' => $diagnosa->kode_diagnosa,
                    'kode_gejala' => 'GJL/016',
                    'kode_penyakit' => 'PYKT/007',
                    'date_created' => time(),
                ];

                $dDetail->insert($data);
            }
        }

        //Penyakit kedelapan
        if (isset($p5)) {
            for ($i = 0; $i < count($gejala); $i++) {
                if ($gejala[$i] == 'GJL/017') {
                    $diagnosa = $diagnosaModel->getLast($email, $id_anak);
                    $p8 = 'PYKT/008';
                    $data = [
                        'kode_diagnosa' => $diagnosa->kode_diagnosa,
                        'kode_gejala' => 'PYKT/005 & GJL/017',
                        'kode_penyakit' => 'PYKT/008',
                        'date_created' => time(),
                    ];

                    $dDetail->insert($data);
                }
            }
        }

        //Penyakit kesembilan
        if (isset($p8) && isset($p6)) {
            $diagnosa = $diagnosaModel->getLast($email, $id_anak);

            $data = [
                'kode_diagnosa' => $diagnosa->kode_diagnosa,
                'kode_gejala' => 'PYKT/008 & PYKT/006',
                'kode_penyakit' => 'PYKT/009',
                'date_created' => time(),
            ];

            $dDetail->insert($data);
        } else if (isset($p7)) {
            $diagnosa = $diagnosaModel->getLast($email, $id_anak);

            $data = [
                'kode_diagnosa' => $diagnosa->kode_diagnosa,
                'kode_gejala' => 'PYKT/007',
                'kode_penyakit' => 'PYKT/009',
                'date_created' => time(),
            ];

            $dDetail->insert($data);
        }

        //Penyakit kesepuluh
        if (isset($p5)) {
            for ($i = 0; $i < count($gejala); $i++) {
                if ($gejala[$i] == 'GJL/018') {
                    $diagnosa = $diagnosaModel->getLast($email, $id_anak);

                    $data = [
                        'kode_diagnosa' => $diagnosa->kode_diagnosa,
                        'kode_gejala' => 'PYKT/005 & GJL/018',
                        'kode_penyakit' => 'PYKT/010',
                        'date_created' => time(),
                    ];

                    $dDetail->insert($data);
                }
            }
        }

        //Penyakit kesebelas
        if (isset($k3)) {
            for ($i = 0; $i < count($gejala); $i++) {
                if ($gejala[$i] == 'GJL/019') {
                    $diagnosa = $diagnosaModel->getLast($email, $id_anak);
                    $p11 = 'PYKT/011';
                    $data = [
                        'kode_diagnosa' => $diagnosa->kode_diagnosa,
                        'kode_gejala' => 'K3 & GJL/019',
                        'kode_penyakit' => 'PYKT/011',
                        'date_created' => time(),
                    ];

                    $dDetail->insert($data);
                }
            }
        }

        //Penyakit keduabelas
        if (isset($p1)) {
            if (isset($p11)) {
                $diagnosa = $diagnosaModel->getLast($email, $id_anak);

                $data = [
                    'kode_diagnosa' => $diagnosa->kode_diagnosa,
                    'kode_gejala' => 'PYKT/001 & PYKT/011',
                    'kode_penyakit' => 'PYKT/012',
                    'date_created' => time(),
                ];

                $dDetail->insert($data);
            }
        }

        for ($i = 0; $i < count($gejala); $i++) {
            if ($gejala[$i] == 'GJL/020') {
                $diagnosa = $diagnosaModel->getLast($email, $id_anak);

                $data = [
                    'kode_diagnosa' => $diagnosa->kode_diagnosa,
                    'kode_gejala' => 'GJL/020',
                    'kode_penyakit' => 'PYKT/012',
                    'date_created' => time(),
                ];

                $dDetail->insert($data);
            }
        }

        //Penyakit ketigabelas
        if (isset($p11)) {
            for ($i = 0; $i < count($gejala); $i++) {
                if ($gejala[$i] == 'GJL/021') {
                    for ($j = 0; $j < count($gejala); $j++) {
                        if ($gejala[$j] == 'GJL/022') {
                            $diagnosa = $diagnosaModel->getLast($email, $id_anak);
                            $p13 = 'PYKT/013';
                            $data = [
                                'kode_diagnosa' => $diagnosa->kode_diagnosa,
                                'kode_gejala' => 'PYKT/011 & GJL/021 & GJL/022',
                                'kode_penyakit' => 'PYKT/013',
                                'date_created' => time(),
                            ];

                            $dDetail->insert($data);
                        }
                    }
                }
            }
        }

        for ($i = 0; $i < count($gejala); $i++) {
            if ($gejala[$i] == 'GJL/025') {
                $diagnosa = $diagnosaModel->getLast($email, $id_anak);
                $p13 = 'PYKT/013';
                $data = [
                    'kode_diagnosa' => $diagnosa->kode_diagnosa,
                    'kode_gejala' => 'GJL/025',
                    'kode_penyakit' => 'PYKT/013',
                    'date_created' => time(),
                ];

                $dDetail->insert($data);
            }
        }

        //Penyakit keempat belas
        if (isset($p13) && isset($p1)) {
            for ($i = 0; $i < count($gejala); $i++) {
                if ($gejala[$i] == 'GJL/023') {
                    $diagnosa = $diagnosaModel->getLast($email, $id_anak);
                    $p14 = 'PYKT/014';
                    $data = [
                        'kode_diagnosa' => $diagnosa->kode_diagnosa,
                        'kode_gejala' => 'PYKT/013 & PYKT/001 & GJL/023',
                        'kode_penyakit' => 'PYKT/014',
                        'date_created' => time(),
                    ];

                    $dDetail->insert($data);
                }
            }
        }

        for ($i = 0; $i < count($gejala); $i++) {
            if ($gejala[$i] == 'GJL/024') {
                $diagnosa = $diagnosaModel->getLast($email, $id_anak);
                $p14 = 'PYKT/014';
                $data = [
                    'kode_diagnosa' => $diagnosa->kode_diagnosa,
                    'kode_gejala' => 'GJL/024',
                    'kode_penyakit' => 'PYKT/014',
                    'date_created' => time(),
                ];

                $dDetail->insert($data);
            }
        }

        //Penyakit kelima belas
        if (isset($p13)) {
            for ($i = 0; $i < count($gejala); $i++) {
                if ($gejala[$i] == 'GJL/025') {
                    $diagnosa = $diagnosaModel->getLast($email, $id_anak);

                    $data = [
                        'kode_diagnosa' => $diagnosa->kode_diagnosa,
                        'kode_gejala' => 'PYKT/013 & GJL/025',
                        'kode_penyakit' => 'PYKT/015',
                        'date_created' => time(),
                    ];

                    $dDetail->insert($data);
                }
            }
        }

        for ($i = 0; $i < count($gejala); $i++) {
            if ($gejala[$i] == 'GJL/026') {
                $diagnosa = $diagnosaModel->getLast($email, $id_anak);

                $data = [
                    'kode_diagnosa' => $diagnosa->kode_diagnosa,
                    'kode_gejala' => 'GJL/026',
                    'kode_penyakit' => 'PYKT/015',
                    'date_created' => time(),
                ];

                $dDetail->insert($data);
            }
        }

        //Penyakit ke enam belas
        if (isset($p11)) {
            for ($i = 0; $i < count($gejala); $i++) {
                if ($gejala[$i] == 'GJL/027') {
                    for ($j = 0; $j < count($gejala); $j++) {
                        if ($gejala[$j] == 'GJL/028') {
                            for ($k = 0; $k < count($gejala); $k++) {
                                if ($gejala[$k] == 'GJL/029') {
                                    $diagnosa = $diagnosaModel->getLast($email, $id_anak);

                                    $data = [
                                        'kode_diagnosa' => $diagnosa->kode_diagnosa,
                                        'kode_gejala' => 'PYKT/011 & GJL/027 & GJL/028 & GJL/029',
                                        'kode_penyakit' => 'PYKT/016',
                                        'date_created' => time(),
                                    ];

                                    $dDetail->insert($data);
                                }
                            }
                        }
                    }
                }
            }
        }

        for ($i = 0; $i < count($gejala); $i++) {
            if ($gejala[$i] == 'GJL/030') {
                $diagnosa = $diagnosaModel->getLast($email, $id_anak);

                $data = [
                    'kode_diagnosa' => $diagnosa->kode_diagnosa,
                    'kode_gejala' => 'GJL/030',
                    'kode_penyakit' => 'PYKT/016',
                    'date_created' => time(),
                ];

                $dDetail->insert($data);
            }
        }

        //Penyakit ke tujuh belas
        if (isset($p11)) {
            for ($i = 0; $i < count($gejala); $i++) {
                if ($gejala[$i] == 'GJL/027') {
                    for ($j = 0; $j < count($gejala); $j++) {
                        if ($gejala[$j] == 'GJL/028') {
                            for ($k = 0; $k < count($gejala); $k++) {
                                if ($gejala[$k] == 'GJL/031') {
                                    $diagnosa = $diagnosaModel->getLast($email, $id_anak);

                                    $data = [
                                        'kode_diagnosa' => $diagnosa->kode_diagnosa,
                                        'kode_gejala' => 'PYKT/011 & GJL/027 & GJL/028 & GJL/031',
                                        'kode_penyakit' => 'PYKT/017',
                                        'date_created' => time(),
                                    ];

                                    $dDetail->insert($data);
                                }
                            }
                        }
                    }
                }
            }
        }

        for ($i = 0; $i < count($gejala); $i++) {
            if ($gejala[$i] == 'GJL/032') {
                $diagnosa = $diagnosaModel->getLast($email, $id_anak);

                $data = [
                    'kode_diagnosa' => $diagnosa->kode_diagnosa,
                    'kode_gejala' => 'GJL/032',
                    'kode_penyakit' => 'PYKT/017',
                    'date_created' => time(),
                ];

                $dDetail->insert($data);
            } else if ($gejala[$i] == 'GJL/033') {
                $diagnosa = $diagnosaModel->getLast($email, $id_anak);

                $data = [
                    'kode_diagnosa' => $diagnosa->kode_diagnosa,
                    'kode_gejala' => 'GJL/033',
                    'kode_penyakit' => 'PYKT/017',
                    'date_created' => time(),
                ];

                $dDetail->insert($data);
            } else if ($gejala[$i] == 'GJL/034') {
                $diagnosa = $diagnosaModel->getLast($email, $id_anak);

                $data = [
                    'kode_diagnosa' => $diagnosa->kode_diagnosa,
                    'kode_gejala' => 'GJL/034',
                    'kode_penyakit' => 'PYKT/017',
                    'date_created' => time(),
                ];

                $dDetail->insert($data);
            }
        }

        //Penyakit ke delapan belas
        if (isset($p11)) {
            for ($i = 0; $i < count($gejala); $i++) {
                if ($gejala[$i] == 'GJL/035') {
                    $diagnosa = $diagnosaModel->getLast($email, $id_anak);

                    $data = [
                        'kode_diagnosa' => $diagnosa->kode_diagnosa,
                        'kode_gejala' => 'PYKT/011 & GJL/035',
                        'kode_penyakit' => 'PYKT/018',
                        'date_created' => time(),
                    ];

                    $dDetail->insert($data);
                }
            }
        }

        for ($i = 0; $i < count($gejala); $i++) {
            if ($gejala[$i] == 'GJL/036') {
                $diagnosa = $diagnosaModel->getLast($email, $id_anak);

                $data = [
                    'kode_diagnosa' => $diagnosa->kode_diagnosa,
                    'kode_gejala' => 'GJL/036',
                    'kode_penyakit' => 'PYKT/018',
                    'date_created' => time(),
                ];

                $dDetail->insert($data);
            }
        }

        $akhir = microtime(true);
        $execute_time = $akhir - $awal;
        var_dump($execute_time);die();

        return redirect()->route('data-diagnosa');


    }


}
