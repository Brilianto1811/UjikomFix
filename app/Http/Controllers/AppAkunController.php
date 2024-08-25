<?php

namespace App\Http\Controllers;

use App\Models\AppAkun;
use App\Http\Controllers\Controller;
use App\Models\Kabkot;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppAkunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function loginUser(Request $request)
    {
        session([
            'activeLayout' => 'side-menu'
        ]);
        $form_email = $request->input('email_akun');
        $form_password = $request->input('password');

        if (auth()->guard('admin')->attempt(['email_akun' => $form_email, 'password' => $form_password]) && Auth::guard('admin')->user()->status_akun == 1) {
            $request->session()->regenerate();
            $levelUser = AppAkun::where('status_akun', auth()->guard('admin')->user()->status_akun)->first();
            auth()->guard('admin')->user()->level = $levelUser;
            return redirect()->route('akunmahasiswa.index')->with('success', 'Berhasil Login!');
        } else if (auth()->guard('mahasiswa')->attempt(['email_akun' => $form_email, 'password' => $form_password]) && Auth::guard('mahasiswa')->user()->status_akun == 2) {
            $request->session()->regenerate();
            $levelUser = AppAkun::where('status_akun', auth()->guard('mahasiswa')->user()->status_akun)->first();
            auth()->guard('mahasiswa')->user()->level = $levelUser;
            return redirect()->route('halamanutama.index')->with('success', 'Berhasil Login!');
        } else {
            return redirect()->back()->with('error', 'Email atau Password Salah');
        }
    }

    public function getKabkotByProvinsi($id_provinsi)
    {
        $kabkot = Kabkot::where('id_provinsi', $id_provinsi)->get();
        return response()->json(['kabkot' => $kabkot]);
    }

    public function getKecamatanByKabkot($id_kabkot)
    {
        $kecamatan = Kecamatan::where('id_kabkot', $id_kabkot)->get();
        return response()->json(['kecamatan' => $kecamatan]);
    }

    public function logout(Request $request)
    {
        $guards = ['admin', 'mahasiswa'];
        $viewRedirects = [
            'admin' => 'login',
            'mahasiswa' => 'login',
        ];

        foreach ($viewRedirects as $key => $value) {
            Auth::guard($key)->logout();
        };

        $request->session()->regenerate();
        return redirect()->intended(route('login'))->with('success', 'Berhasil Logout');
    }
}
