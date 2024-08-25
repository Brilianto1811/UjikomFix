<?php

use App\Http\Controllers\AppAkunController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\LayoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => ['guest', 'no-cache']], function () {
    // Route::get('/', [PageController::class, 'index'])->name('index')->middleware('guest');
    Route::get('/login', [PageController::class, 'login'])->name('login')->middleware('guest');
});

Route::get('/', [PageController::class, 'loading'])->name('index');

// Routes Authentication
Route::post('/login', [AppAkunController::class, 'loginUser'])->name('login.user');
// Route::post('/login/adminopd', [AppMdInstansiController::class, 'loginAdminOpd'])->name('login.adminopd');
// Route::post('/reset-password/adminopd', [AppMdInstansiController::class, 'tiketResetPassword'])->name('reset.tiketpassword');
// Route::post('/login/admintiket', [AppMdInstansiController::class, 'loginAdminTiket'])->name('login.admintiket');
// Route::post('/login/adminteknisiaptika', [AppMdInstansiController::class, 'loginAdminTeknisiAptika'])->name('login.adminteknisiaptika');
// Route::post('/login/adminteknisiiftek', [AppMdInstansiController::class, 'loginAdminTeknisiIftek'])->name('login.adminteknisiiftek');
Route::get('/logout', [AppAkunController::class, 'logout'])->name('logout');
Route::get('theme-switcher/{activeTheme}', [ThemeController::class, 'switch'])->name('theme-switcher');
Route::get('layout-switcher/{activeLayout}', [LayoutController::class, 'switch'])->name('layout-switcher');

Route::get('/get-kabkot/{id_provinsi}', [AppAkunController::class, 'getKabkotByProvinsi']);
Route::get('/get-kecamatan/{id_kabkot}', [AppAkunController::class, 'getKecamatanByKabkot']);


Route::controller(PageController::class)->group(function () {
    Route::get('/test', 'dashboardOverview1')->name('dashboard-overview-1');
    // Route::get('dashboard-overview-2-page', 'dashboardOverview2')->name('dashboard-overview-2');
    // Route::get('dashboard-overview-3-page', 'dashboardOverview3')->name('dashboard-overview-3');
    Route::get('dashboard-overview-4-page', 'dashboardOverview4')->name('dashboard-overview-4');
    Route::get('categories-page', 'categories')->name('categories');
    Route::get('add-product-page', 'addProduct')->name('add-product');
    Route::get('product-list-page', 'productList')->name('product-list');
    Route::get('product-grid-page', 'productGrid')->name('product-grid');
    Route::get('transaction-list-page', 'transactionList')->name('transaction-list');
    Route::get('transaction-detail-page', 'transactionDetail')->name('transaction-detail');
    Route::get('seller-list-page', 'sellerList')->name('seller-list');
    Route::get('seller-detail-page', 'sellerDetail')->name('seller-detail');
    Route::get('reviews-page', 'reviews')->name('reviews');
    Route::get('inbox-page', 'inbox')->name('inbox');
    Route::get('file-manager-page', 'fileManager')->name('file-manager');
    Route::get('point-of-sale-page', 'pointOfSale')->name('point-of-sale');
    Route::get('chat-page', 'chat')->name('chat');
    Route::get('post-page', 'post')->name('post');
    Route::get('calendar-page', 'calendar')->name('calendar');
    Route::get('crud-data-list-page', 'crudDataList')->name('crud-data-list');
    Route::get('crud-form-page', 'crudForm')->name('crud-form');
    Route::get('users-layout-1-page', 'usersLayout1')->name('users-layout-1');
    Route::get('users-layout-2-page', 'usersLayout2')->name('users-layout-2');
    Route::get('users-layout-3-page', 'usersLayout3')->name('users-layout-3');
    Route::get('profile-overview-1-page', 'profileOverview1')->name('profile-overview-1');
    Route::get('profile-overview-2-page', 'profileOverview2')->name('profile-overview-2');
    Route::get('profile-overview-3-page', 'profileOverview3')->name('profile-overview-3');
    Route::get('wizard-layout-1-page', 'wizardLayout1')->name('wizard-layout-1');
    Route::get('wizard-layout-2-page', 'wizardLayout2')->name('wizard-layout-2');
    Route::get('wizard-layout-3-page', 'wizardLayout3')->name('wizard-layout-3');
    Route::get('blog-layout-1-page', 'blogLayout1')->name('blog-layout-1');
    Route::get('blog-layout-2-page', 'blogLayout2')->name('blog-layout-2');
    Route::get('blog-layout-3-page', 'blogLayout3')->name('blog-layout-3');
    Route::get('pricing-layout-1-page', 'pricingLayout1')->name('pricing-layout-1');
    Route::get('pricing-layout-2-page', 'pricingLayout2')->name('pricing-layout-2');
    Route::get('invoice-layout-1-page', 'invoiceLayout1')->name('invoice-layout-1');
    Route::get('invoice-layout-2-page', 'invoiceLayout2')->name('invoice-layout-2');
    Route::get('faq-layout-1-page', 'faqLayout1')->name('faq-layout-1');
    Route::get('faq-layout-2-page', 'faqLayout2')->name('faq-layout-2');
    Route::get('faq-layout-3-page', 'faqLayout3')->name('faq-layout-3');
    // Route::get('login-page', 'login')->name('login');
    Route::get('register-page', 'register')->name('register');
    Route::get('error-page-page', 'errorPage')->name('error-page');
    Route::get('update-profile-page', 'updateProfile')->name('update-profile');
    Route::get('change-password-page', 'changePassword')->name('change-password');
    Route::get('regular-table-page', 'regularTable')->name('regular-table');
    Route::get('tabulator-page', 'tabulator')->name('tabulator');
    Route::get('modal-page', 'modal')->name('modal');
    Route::get('slide-over-page', 'slideOver')->name('slide-over');
    Route::get('notification-page', 'notification')->name('notification');
    Route::get('tab-page', 'tab')->name('tab');
    Route::get('accordion-page', 'accordion')->name('accordion');
    Route::get('button-page', 'button')->name('button');
    Route::get('alert-page', 'alert')->name('alert');
    Route::get('progress-bar-page', 'progressBar')->name('progress-bar');
    Route::get('tooltip-page', 'tooltip')->name('tooltip');
    Route::get('dropdown-page', 'dropdown')->name('dropdown');
    Route::get('typography-page', 'typography')->name('typography');
    Route::get('icon-page', 'icon')->name('icon');
    Route::get('loading-icon-page', 'loadingIcon')->name('loading-icon');
    Route::get('regular-form-page', 'regularForm')->name('regular-form');
    Route::get('datepicker-page', 'datepicker')->name('datepicker');
    Route::get('tom-select-page', 'tomSelect')->name('tom-select');
    Route::get('file-upload-page', 'fileUpload')->name('file-upload');
    Route::get('wysiwyg-editor-classic-page', 'wysiwygEditorClassic')->name('wysiwyg-editor-classic');
    Route::get('wysiwyg-editor-inline-page', 'wysiwygEditorInline')->name('wysiwyg-editor-inline');
    Route::get('wysiwyg-editor-balloon-page', 'wysiwygEditorBalloon')->name('wysiwyg-editor-balloon');
    Route::get('wysiwyg-editor-balloon-block-page', 'wysiwygEditorBalloonBlock')->name('wysiwyg-editor-balloon-block');
    Route::get('wysiwyg-editor-document-page', 'wysiwygEditorDocument')->name('wysiwyg-editor-document');
    Route::get('validation-page', 'validation')->name('validation');
    Route::get('chart-page', 'chart')->name('chart');
    Route::get('slider-page', 'slider')->name('slider');
    Route::get('image-zoom-page', 'imageZoom')->name('image-zoom');
});
Route::group(['prefix' => 'dashboard', 'middleware' => ['usermiddleware']], function () {
    Route::controller(PageController::class)->group(function () {
        Route::get('/tessssss', 'dashboard')->name('dashboard');
        Route::get('admin', 'dashboardOverview2')->name('dashboard-overview-2');
        Route::get('mahasiswa', 'dashboardOverview3')->name('dashboard-overview-3');
        Route::get('master-instansi', 'masterInstansi')->name('masterInstansi');

        // ADMIN MASTER DATA
        //AKUN MAHASISWA
        Route::get('akun-mahasiswa/index', 'akunmahasiswaShow')->name('akunmahasiswa.index');
        Route::get('akun-mahasiswa/create', 'akunmahasiswaShowCreate')->name('akunmahasiswa.create');
        Route::get('akun-mahasiswa/edit', 'akunmahasiswaShowEdit')->name('akunmahasiswa.edit');
        Route::get('akun-mahasiswa/detail', 'akunmahasiswaDetail')->name('akunmahasiswa.detail');
        Route::post('akun-mahasiswa/proses-add', 'akunmahasiswaProsesAdd')->name('akunmahasiswa.proses-add');
        Route::post('akun-mahasiswa/proses-edit', 'akunmahasiswaProsesEdit')->name('akunmahasiswa.proses-edit');
        Route::get('akun-mahasiswa/proses-delete', 'akunmahasiswaProsesDelete')->name('akunmahasiswa.proses-delete');

        //PENDAFTARAN MAHASISWA
        Route::get('pendaftaran-mahasiswa/index', 'pendaftaranmahasiswaShow')->name('pendaftaranmahasiswa.index');
        Route::get('pendaftaran-mahasiswa/create', 'pendaftaranmahasiswaCreate')->name('pendaftaranmahasiswa.create');
        Route::get('pendaftaran-mahasiswa/edit', 'pendaftaranmahasiswaShowEdit')->name('pendaftaranmahasiswa.edit');
        Route::get('pendaftaran-mahasiswa/detail', 'pendaftaranmahasiswaDetail')->name('pendaftaranmahasiswa.detail');
        Route::post('pendaftaran-mahasiswa/proses-add', 'pendaftaranmahasiswaProsesAdd')->name('pendaftaranmahasiswa.proses-add');
        Route::post('pendaftaran-mahasiswa/proses-edit', 'pendaftaranmahasiswaProsesEdit')->name('pendaftaranmahasiswa.proses-edit');
        Route::get('pendaftaran-mahasiswa/proses-delete', 'pendaftaranmahasiswaProsesDelete')->name('pendaftaranmahasiswa.proses-delete');

        //MAHASISWA

        //Halaman Utama
        Route::get('halaman-utama/index', 'halamanutamaShow')->name('halamanutama.index');
        Route::get('halaman-pendaftaran/daftar', 'halamandaftarShow')->name('halamandaftar.index');
        Route::post('halaman-pendaftaran/proses-edit', 'halamandaftarProsesEdit')->name('halamandaftar.proses-edit');

        //Admin Mahasiswa Akun
        Route::get('update-forumadmin', 'forum_updatebyid')->name('forum_updatebyid');
        // Route::get('update-forumadmin/{uuid}', 'forum_updatebyid')->name('forum_updatebyid');
    });
});
