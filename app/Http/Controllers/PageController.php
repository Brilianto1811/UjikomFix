<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Livewire\WebDataStatus;
use App\Models\AppMdUser;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\AppAkun;
use App\Models\AppMdWebdata;
use App\Models\AppDataForum;
use App\Models\AppDataLayanan;
use App\Models\AppMdLayanan;
use App\Models\AppMdBookmarksForum;
use Illuminate\Support\Facades\Auth;
use Livewire\Livewire;
use App\Events\TableUpdated;
use App\Models\AppMdLevelPrioritas;
use GuzzleHttp\Client;
use App\Models\AppMdForum;
use App\Models\AppMdMaildata;
use App\Mail\EmailKustomAnda;
use App\Mail\ManajemenMail;
use App\Models\Agama;
use App\Models\Kabkot;
use App\Models\Kecamatan;
use App\Models\Provinsi;
use Mail;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Intervention\Image\Colors\Rgb\Channels\Red;

class PageController extends Controller
{
    /**
     * Show specified view.
     *
     */

    public function index(): View
    {
        return view('pages.landing-page');
    }

    public function loading(): View
    {
        return view('pages/loading');
    }


    public function dashboardOverview1(): View
    {
        return view('pages/dashboard-overview-1');
    }

    public function dashboardcontoh(): View
    {
        return view('pages/superadmin/dashboard');
    }

    /**
     * Show specified view.
     *
     */


    public function dashboardOverview2(): View
    {
        // Mengambil seluruh data dari tabel app_akun
        $akunList = AppAkun::all();

        // Mengirim data ke view menggunakan compact
        return view('pages/dashboard-overview-2', compact('akunList'));
    }

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


    /**
     * Show specified view.
     *
     */
    public function dashboardOverview3(): View
    {
        return view('pages/dashboard-overview-3');
    }

    /**
     * Show specified view.
     *
     */
    public function dashboardOverview4(): View
    {
        return view('pages/dashboard-overview-4');
    }

    /**
     * Show specified view.
     *
     */
    public function inbox(): View
    {
        return view('pages/inbox');
    }

    /**
     * Show specified view.
     *
     */
    public function categories(): View
    {
        return view('pages/categories');
    }

    /**
     * Show specified view.
     *
     */
    public function addProduct(): View
    {
        return view('pages/add-product');
    }

    /**
     * Show specified view.
     *
     */
    public function productList(): View
    {
        return view('pages/product-list');
    }

    /**
     * Show specified view.
     *
     */
    public function productGrid(): View
    {
        return view('pages/product-grid');
    }

    /**
     * Show specified view.
     *
     */
    public function transactionList(): View
    {
        return view('pages/transaction-list');
    }

    /**
     * Show specified view.
     *
     */
    public function transactionDetail(): View
    {
        return view('pages/transaction-detail');
    }

    /**
     * Show specified view.
     *
     */
    public function sellerList(): View
    {
        return view('pages/seller-list');
    }

    /**
     * Show specified view.
     *
     */
    public function sellerDetail(): View
    {
        return view('pages/seller-detail');
    }

    /**
     * Show specified view.
     *
     */
    public function reviews(): View
    {
        return view('pages/reviews');
    }

    /**
     * Show specified view.
     *
     */
    public function fileManager(): View
    {
        return view('pages/file-manager');
    }

    /**
     * Show specified view.
     *
     */
    public function pointOfSale(): View
    {
        return view('pages/point-of-sale');
    }

    /**
     * Show specified view.
     *
     */
    public function chat(): View
    {
        return view('pages/chat');
    }

    /**
     * Show specified view.
     *
     */
    public function post(): View
    {
        return view('pages/post');
    }

    /**
     * Show specified view.
     *
     */
    public function calendar(): View
    {
        return view('pages/calendar');
    }

    /**
     * Show specified view.
     *
     */
    public function crudDataList(): View
    {
        return view('pages/crud-data-list');
    }

    /**
     * Show specified view.
     *
     */
    public function crudForm(): View
    {
        return view('pages/crud-form');
    }

    /**
     * Show specified view.
     *
     */
    public function usersLayout1(): View
    {
        return view('pages/users-layout-1');
    }

    /**
     * Show specified view.
     *
     */
    public function usersLayout2(): View
    {
        return view('pages/users-layout-2');
    }

    /**
     * Show specified view.
     *
     */
    public function usersLayout3(): View
    {
        return view('pages/users-layout-3');
    }

    /**
     * Show specified view.
     *
     */
    public function profileOverview1(): View
    {
        return view('pages/profile-overview-1');
    }

    /**
     * Show specified view.
     *
     */
    public function profileOverview2(): View
    {
        return view('pages/profile-overview-2');
    }

    /**
     * Show specified view.
     *
     */
    public function profileOverview3(): View
    {
        return view('pages/profile-overview-3');
    }

    /**
     * Show specified view.
     *
     */
    public function wizardLayout1(): View
    {
        return view('pages/wizard-layout-1');
    }

    /**
     * Show specified view.
     *
     */
    public function wizardLayout2(): View
    {
        return view('pages/wizard-layout-2');
    }

    /**
     * Show specified view.
     *
     */
    public function wizardLayout3(): View
    {
        return view('pages/wizard-layout-3');
    }

    /**
     * Show specified view.
     *
     */
    public function blogLayout1(): View
    {
        return view('pages/blog-layout-1');
    }

    /**
     * Show specified view.
     *
     */
    public function blogLayout2(): View
    {
        return view('pages/blog-layout-2');
    }

    /**
     * Show specified view.
     *
     */
    public function blogLayout3(): View
    {
        return view('pages/blog-layout-3');
    }

    /**
     * Show specified view.
     *
     */
    public function pricingLayout1(): View
    {
        return view('pages/pricing-layout-1');
    }

    /**
     * Show specified view.
     *
     */
    public function pricingLayout2(): View
    {
        return view('pages/pricing-layout-2');
    }

    /**
     * Show specified view.
     *
     */
    public function invoiceLayout1(): View
    {
        return view('pages/invoice-layout-1');
    }

    /**
     * Show specified view.
     *
     */
    public function invoiceLayout2(): View
    {
        return view('pages/invoice-layout-2');
    }

    /**
     * Show specified view.
     *
     */
    public function faqLayout1(): View
    {
        return view('pages/faq-layout-1');
    }

    /**
     * Show specified view.
     *
     */
    public function faqLayout2(): View
    {
        return view('pages/faq-layout-2');
    }

    /**
     * Show specified view.
     *
     */
    public function faqLayout3(): View
    {
        return view('pages/faq-layout-3');
    }

    /**
     * Show specified view.
     *
     */
    public function login(): View
    {

        $useraplikasi = User::pluck('name');

        return view('pages/login', compact('useraplikasi'));
    }


    /**
     * Show specified view.
     *
     */
    public function register(): View
    {
        return view('pages/register');
    }

    /**
     * Show specified view.
     *
     */
    public function errorPage(): View
    {
        return view('pages/error-page');
    }

    /**
     * Show specified view.
     *
     */
    public function updateProfile(): View
    {
        return view('pages/update-profile');
    }

    /**
     * Show specified view.
     *
     */
    public function changePassword(): View
    {
        return view('pages/change-password');
    }

    /**
     * Show specified view.
     *
     */
    public function regularTable(): View
    {
        return view('pages/regular-table');
    }

    /**
     * Show specified view.
     *
     */
    public function tabulator(): View
    {
        return view('pages/tabulator');
    }

    /**
     * Show specified view.
     *
     */
    public function modal(): View
    {
        return view('pages/modal');
    }

    /**
     * Show specified view.
     *
     */
    public function slideOver(): View
    {
        return view('pages/slide-over');
    }

    /**
     * Show specified view.
     *
     */
    public function notification(): View
    {
        return view('pages/notification');
    }

    /**
     * Show specified view.
     *
     */
    public function tab(): View
    {
        return view('pages/tab');
    }

    /**
     * Show specified view.
     *
     */
    public function accordion(): View
    {
        return view('pages/accordion');
    }

    /**
     * Show specified view.
     *
     */
    public function button(): View
    {
        return view('pages/button');
    }

    /**
     * Show specified view.
     *
     */
    public function alert(): View
    {
        return view('pages/alert');
    }

    /**
     * Show specified view.
     *
     */
    public function progressBar(): View
    {
        return view('pages/progress-bar');
    }

    /**
     * Show specified view.
     *
     */
    public function tooltip(): View
    {
        return view('pages/tooltip');
    }

    /**
     * Show specified view.
     *
     */
    public function dropdown(): View
    {
        return view('pages/dropdown');
    }

    /**
     * Show specified view.
     *
     */
    public function typography(): View
    {
        return view('pages/typography');
    }

    /**
     * Show specified view.
     *
     */
    public function icon(): View
    {
        return view('pages/icon');
    }

    /**
     * Show specified view.
     *
     */
    public function loadingIcon(): View
    {
        return view('pages/loading-icon');
    }

    /**
     * Show specified view.
     *
     */
    public function regularForm(): View
    {
        return view('pages/regular-form');
    }

    /**
     * Show specified view.
     *
     */
    public function datepicker(): View
    {
        return view('pages/datepicker');
    }

    /**
     * Show specified view.
     *
     */
    public function tomSelect(): View
    {
        return view('pages/tom-select');
    }

    /**
     * Show specified view.
     *
     */
    public function fileUpload(): View
    {
        return view('pages/file-upload');
    }

    /**
     * Show specified view.
     *
     */
    public function wysiwygEditorClassic(): View
    {
        return view('pages/wysiwyg-editor-classic');
    }

    /**
     * Show specified view.
     *
     */
    public function wysiwygEditorInline(): View
    {
        return view('pages/wysiwyg-editor-inline');
    }

    /**
     * Show specified view.
     *
     */
    public function wysiwygEditorBalloon(): View
    {
        return view('pages/wysiwyg-editor-balloon');
    }

    /**
     * Show specified view.
     *
     */
    public function wysiwygEditorBalloonBlock(): View
    {
        return view('pages/wysiwyg-editor-balloon-block');
    }

    /**
     * Show specified view.
     *
     */
    public function wysiwygEditorDocument(): View
    {
        return view('pages/wysiwyg-editor-document');
    }

    /**
     * Show specified view.
     *
     */
    public function validation(): View
    {
        return view('pages/validation');
    }

    /**
     * Show specified view.
     *
     */
    public function chart(): View
    {
        return view('pages/chart');
    }

    /**
     * Show specified view.
     *
     */
    public function slider(): View
    {
        return view('pages/slider');
    }

    /**
     * Show specified view.
     *
     */
    public function imageZoom(): View
    {
        return view('pages/image-zoom');
    }
}
