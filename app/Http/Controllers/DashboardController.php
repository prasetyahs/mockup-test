<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Pekerjaan;
use App\Models\Pelatihan;
use App\Models\Pendidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{

    private $biodata, $pendidikan, $pekerjaan, $pelatihan,$role;
    public function __construct()
    {
        $this->role = Session::get('user');
        $this->biodata = new Biodata();
        $this->pendidikan = new Pendidikan();
        $this->pekerjaan = new Pekerjaan();
        $this->pelatihan = new Pelatihan();
    }
    public function index()
    {
        return view("dashboard");
    }

    public function addBiodata(Request $request)
    {
        $id = $this->biodata->insertGetId([
            'position' => $request->position,
            'name' => $request->name,
            'ktp' => $request->number_ktp,
            'place_birth_day' => $request->place . ", " . $request->birth_day,
            'gender' => $request->jk,
            'religion' => $request->religion,
            'blood_type' => $request->blood_type,
            'status' => $request->status,
            'address' => $request->address,
            'email' => $request->email,
            'no_telp' => $request->phone
        ]);


        $pendidikanQ = [];
        for ($i = 0; $i < count($request->jenjang_pendidikan); $i++) {
            $pendidikanQ[$i] = [
                'biodata' => $id,
                'jenjang_pendidikan' => $request->jenjang_pendidikan[$i],
                'institute_name' => $request->nama_institute[$i],
                'prodi' => $request->jurusan[$i],
                'tahun_lulus' => $request->tahun_lulus[$i],
                'ipk' => $request->ipk[$i]
            ];
        }
        $this->pendidikan->insert($pendidikanQ);
        $kursus = [];
        for ($i = 0; $i < count($request->nama_kursus); $i++) {
            $kursus[$i] = [
                'biodata' => $id,
                'course_name' => $request->nama_kursus[$i],
                'certificate' => $request->sertifikat[$i],
                'year' => $request->tahun[$i]
            ];
        }
        $this->pelatihan->insert($kursus);
        $pekerjaanQ = [];
        for ($i = 0; $i < count($request->nama_perusahaan); $i++) {
            $pekerjaanQ[$i] = [
                'biodata' => $id,
                'company_name' => $request->nama_perusahaan[$i],
                'last_position' => $request->posisi_terakhir[$i],
                'last_income' => $request->last_income[$i],
                'year' => $request->year[$i]
            ];
        }
        $this->pekerjaan->insert($pekerjaanQ);
        return redirect("/dashboard");
    }

    public function dataEmployee()
    {
        $data['biodata'] = $this->biodata->select('name', 'place_birth_day', 'position')->get();
        return view("employee", $data);
    }
}
