<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\AppAkun;
use Illuminate\Support\Facades\Auth;
use App\Models\Agama;
use App\Models\Kabkot;
use App\Models\Kecamatan;
use App\Models\Provinsi;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{
    /**
     * Show specified view.
     *
     */

    public function loading(): View
    {
        return view('pages/loading');
    }

    /**
     * Show specified view.
     *
     */


    public function akunmahasiswaShow(): View
    {
        // Mengambil data dengan status_akun = 2 dari tabel app_akun
        $akunList = AppAkun::where('status_akun', 2)->get();

        // Mengirim data ke view menggunakan compact
        return view('pages.admin.akun-mahasiswa.index', compact('akunList'));
    }


    public function akunmahasiswaShowCreate(Request $request)
    {
        $dataakunShowCreate = AppAkun::all();
        return view('pages.admin.akun-mahasiswa.create', [
            'dataakunShowCreate' => $dataakunShowCreate
        ]);
    }

    public function akunmahasiswaShowEdit(Request $request)
    {
        $form_id_akun = $request->query('id_akun', '');

        $dataakunShowEdit = AppAkun::findOrFail($form_id_akun); // narik semua dari db kirim ke view
        return view('pages.admin.akun-mahasiswa.edit', ['dataakunShowEdit' => $dataakunShowEdit]);
    }

    public function akunmahasiswaProsesAdd(Request $request)
    {
        $form_id_akun = $request->post('id_akun');
        $form_nama_akun = $request->post('nama_akun');
        $form_email_akun = $request->post('email_akun');
        $form_password = $request->post('password');

        $tblAkunmahasiswa = new AppAkun();
        $tblAkunmahasiswa->id_akun = $form_id_akun;
        $tblAkunmahasiswa->nama_akun = $form_nama_akun;
        $tblAkunmahasiswa->email_akun = $form_email_akun;
        $tblAkunmahasiswa->status_akun = '2';
        $tblAkunmahasiswa->password = Hash::make($form_password);
        $tblAkunmahasiswa->save();

        return redirect()->route('akunmahasiswa.index')->with('success', 'Berhasil Menambah Data');
    }
    public function akunmahasiswaProsesEdit(Request $request)
    {
        $form_oldid = $request->post('oldid');
        $form_nama_akun = $request->post('nama_akun');
        $form_email_akun = $request->post('email_akun');
        $form_password = $request->post('password');

        $tblAkunmahasiswa = AppAkun::findOrFail($form_oldid);
        $tblAkunmahasiswa->nama_akun = $form_nama_akun;
        $tblAkunmahasiswa->email_akun = $form_email_akun;
        $tblAkunmahasiswa->password = Hash::make($form_password);
        $tblAkunmahasiswa->save();

        return redirect()->route('akunmahasiswa.index')->with('success', 'Berhasil Mengubah Data');
    }
    public function akunmahasiswaProsesDelete(Request $request)
    {
        $id = $request->id;
        $tblAkunmahasiswa = AppAkun::where(['id_akun' => $id])->firstOrFail();

        $tblAkunmahasiswa->delete();

        return redirect()->route('akunmahasiswa.index')->with('success', 'Berhasil Menghapus Data');
    }

    public function pendaftaranmahasiswaShow(): View
    {
        // Mengambil data dengan status_akun = 2 dari tabel app_akun
        $Pendaftaranlist = AppAkun::where('status_akun', 2)->get();

        // Mengirim data ke view menggunakan compact
        return view('pages.admin.pendaftaran-mahasiswa.index', compact('Pendaftaranlist'));
    }


    public function pendaftaranmahasiswaShowCreate(Request $request)
    {
        $pendaftaranmahasiswaShowCreate = AppAkun::all();
        return view('pages.admin.pendaftaran-mahasiswa.create', [
            'pendaftaranmahasiswaShowCreate' => $pendaftaranmahasiswaShowCreate
        ]);
    }

    public function pendaftaranmahasiswaShowEdit(Request $request)
    {
        $form_id_akun = $request->query('id_akun', '');

        // Retrieve the account data
        $pendaftaranmahasiswaShowEdit = AppAkun::findOrFail($form_id_akun);

        // Fetch the dropdown data
        $dataProv = Provinsi::all(); // Fetch all provinces
        $dataKabkot = Kabkot::all(); // Fetch all cities/districts
        $dataKec = Kecamatan::all(); // Fetch all sub-districts
        $dataAgama = Agama::all(); // Fetch all sub-districts

        // Pass data to the view
        return view('pages.admin.pendaftaran-mahasiswa.edit', [
            'pendaftaranmahasiswaShowEdit' => $pendaftaranmahasiswaShowEdit,
            'dataProv' => $dataProv,
            'dataKabkot' => $dataKabkot,
            'dataKec' => $dataKec,
            'dataAgama' => $dataAgama,
        ]);
    }


    public function pendaftaranmahasiswaDetail(Request $request)
    {
        $form_id_akun = $request->query('id_akun', '');

        // Mengambil data akun beserta relasi ke provinsi dan kabkot
        $pendaftaranmahasiswaShowDetail = DB::table('app_akun')
            ->leftJoin('provinsi', 'app_akun.id_provinsi', '=', 'provinsi.id_provinsi')
            ->leftJoin('kabkot', 'app_akun.id_kabkot', '=', 'kabkot.id_kabkot')
            ->select('app_akun.*', 'provinsi.nama_provinsi', 'kabkot.nama_kabkot')
            ->where('app_akun.id_akun', $form_id_akun)
            ->first();

        return view('pages.admin.pendaftaran-mahasiswa.detail', [
            'pendaftaranmahasiswaShowDetail' => $pendaftaranmahasiswaShowDetail
        ]);
    }


    public function pendaftaranmahasiswaProsesAdd(Request $request)
    {
        $form_id_akun = $request->post('id_akun');
        $form_nama_akun = $request->post('nama_akun');
        $form_email_akun = $request->post('email_akun');
        $form_password = $request->post('password');

        $tblPendaftaranmahasiswa = new AppAkun();
        $tblPendaftaranmahasiswa->id_akun = $form_id_akun;
        $tblPendaftaranmahasiswa->nama_akun = $form_nama_akun;
        $tblPendaftaranmahasiswa->email_akun = $form_email_akun;
        $tblPendaftaranmahasiswa->status_akun = '2';
        $tblPendaftaranmahasiswa->password = Hash::make($form_password);
        $tblPendaftaranmahasiswa->save();

        return redirect()->route('pendaftaranmahasiswa.index')->with('success', 'Berhasil Menambah Data');
    }
    public function pendaftaranmahasiswaProsesEdit(Request $request)
    {
        $form_oldid = $request->post('oldid');
        $form_nama_akun = $request->post('nama_akun');
        $form_email_akun = $request->post('email_akun');
        $form_password = $request->post('password');

        $tblPendaftaranmahasiswa = AppAkun::findOrFail($form_oldid);
        $tblPendaftaranmahasiswa->nama_akun = $form_nama_akun;
        $tblPendaftaranmahasiswa->email_akun = $form_email_akun;
        $tblPendaftaranmahasiswa->password = Hash::make($form_password);
        $tblPendaftaranmahasiswa->nama_akun = $request->input('nama_akun');
        $tblPendaftaranmahasiswa->email_akun = $request->input('email_akun');
        $tblPendaftaranmahasiswa->alamatktp_akun = $request->input('alamatktp_akun');
        $tblPendaftaranmahasiswa->alamatdomisili_akun = $request->input('alamatdomisili_akun');
        $tblPendaftaranmahasiswa->id_provinsi = $request->input('id_provinsi');
        $tblPendaftaranmahasiswa->id_kabkot = $request->input('id_kabkot');
        $tblPendaftaranmahasiswa->nama_kecamatan = $request->input('nama_kecamatan');
        $tblPendaftaranmahasiswa->nomorhp_akun = $request->input('nomorhp_akun');
        $tblPendaftaranmahasiswa->nomortelepon_akun = $request->input('nomortelepon_akun');
        $tblPendaftaranmahasiswa->kewarganegaraan_akun = $request->input('kewarganegaraan_akun');
        $tblPendaftaranmahasiswa->wna = $request->input('wna');
        $tblPendaftaranmahasiswa->tanggallahir_akun = $request->input('tanggallahir_akun');
        $tblPendaftaranmahasiswa->tempatlahir_akun = $request->input('tempatlahir_akun');
        $tblPendaftaranmahasiswa->provinsilahir_akun = $request->input('provinsilahir_akun');
        $tblPendaftaranmahasiswa->kabkotlahir_akun = $request->input('kabkotlahir_akun');
        $tblPendaftaranmahasiswa->luarlahir_akun = $request->input('luarlahir_akun');
        $tblPendaftaranmahasiswa->jk_akun = $request->input('jk_akun');
        $tblPendaftaranmahasiswa->statusnikah_akun = $request->input('statusnikah_akun');
        $tblPendaftaranmahasiswa->id_agama = $request->input('id_agama');

        $tblPendaftaranmahasiswa->save();

        return redirect()->route('pendaftaranmahasiswa.index')->with('success', 'Berhasil Mengubah Data');
    }


    public function pendaftaranmahasiswaProsesDelete(Request $request)
    {
        $id = $request->id;
        $tblPendaftaranmahasiswa = AppAkun::where(['id_akun' => $id])->firstOrFail();

        $tblPendaftaranmahasiswa->delete();

        return redirect()->route('pendaftaranmahasiswa.index')->with('success', 'Berhasil Menghapus Data');
    }

    public function halamanutamaShow(): View
    {
        return view('pages.mahasiswa.halaman-utama');
    }

    public function halamandaftarShow(Request $request)
    {
        // Fetch the dropdown data
        $dataProv = Provinsi::all(); // Fetch all provinces
        $dataKabkot = Kabkot::all(); // Fetch all cities/districts
        $dataKec = Kecamatan::all(); // Fetch all sub-districts
        $dataAgama = Agama::all(); // Fetch all religions

        // Get the logged-in user's data (from 'mahasiswa' guard)
        $halamandaftarShowEdit = Auth::guard('mahasiswa')->user();

        // Pass data to the view
        return view('pages.mahasiswa.pendaftaran-maba', [
            'halamandaftarShowEdit' => $halamandaftarShowEdit,
            'dataProv' => $dataProv,
            'dataKabkot' => $dataKabkot,
            'dataKec' => $dataKec,
            'dataAgama' => $dataAgama,
        ]);
    }



    public function halamandaftarProsesEdit(Request $request)
    {
        $userId = auth('mahasiswa')->id();

        // Find the user by ID
        $tblHalamanDaftar = AppAkun::findOrFail($userId);
        $tblHalamanDaftar->nama_akun = $request->input('nama_akun');
        $tblHalamanDaftar->email_akun = $request->input('email_akun');
        $tblHalamanDaftar->alamatktp_akun = $request->input('alamatktp_akun');
        $tblHalamanDaftar->alamatdomisili_akun = $request->input('alamatdomisili_akun');
        $tblHalamanDaftar->id_provinsi = $request->input('id_provinsi');
        $tblHalamanDaftar->id_kabkot = $request->input('id_kabkot');
        $tblHalamanDaftar->nama_kecamatan = $request->input('nama_kecamatan');
        $tblHalamanDaftar->nomorhp_akun = $request->input('nomorhp_akun');
        $tblHalamanDaftar->nomortelepon_akun = $request->input('nomortelepon_akun');
        $tblHalamanDaftar->kewarganegaraan_akun = $request->input('kewarganegaraan_akun');
        $tblHalamanDaftar->wna = $request->input('wna');
        $tblHalamanDaftar->tanggallahir_akun = $request->input('tanggallahir_akun');
        $tblHalamanDaftar->tempatlahir_akun = $request->input('tempatlahir_akun');
        $tblHalamanDaftar->provinsilahir_akun = $request->input('provinsilahir_akun');
        $tblHalamanDaftar->kabkotlahir_akun = $request->input('kabkotlahir_akun');
        $tblHalamanDaftar->luarlahir_akun = $request->input('luarlahir_akun');
        $tblHalamanDaftar->jk_akun = $request->input('jk_akun');
        $tblHalamanDaftar->statusnikah_akun = $request->input('statusnikah_akun');
        $tblHalamanDaftar->id_agama = $request->input('id_agama');

        $tblHalamanDaftar->save();

        return redirect()->back()->with('success', 'Berhasil Mengubah Data');
    }
}
