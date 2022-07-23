<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\EofficeController::class, 'dashboard'])->name('dashboard');

    //departemen
    Route::get('/departemen', [App\Http\Controllers\EofficeController::class, 'departemen'])->name('departemen');
    Route::get('/form-departemen', [App\Http\Controllers\EofficeController::class, 'form_departemen'])->name('form_departemen');
    Route::post('/insert-departemen', [App\Http\Controllers\EofficeController::class, 'insert_depar'])->name('insert_departemen');
    Route::get('/departemen/delete-departemen/{id}', [App\Http\Controllers\EofficeController::class, 'deletedepartemen']);
    Route::get('/departemen/edit-departemen/{id}', [App\Http\Controllers\EofficeController::class, 'editdepartemen']);
    Route::post('/departemen/update-departemen/{id}', [App\Http\Controllers\EofficeController::class, 'updatedepartemen']);


    //direktorat
    Route::get('/direktorat', [App\Http\Controllers\EofficeController::class, 'direktorat'])->name('direktorat');
    Route::get('/direktorat/form-direktorat', [App\Http\Controllers\EofficeController::class, 'form_direktorat'])->name('form_direktorat');
    Route::post('/direktorat/insert-direktorat', [App\Http\Controllers\EofficeController::class, 'insert_direktorat'])->name('insert_direktorat');
    Route::get('/direktorat/delete-direktorat/{id}', [App\Http\Controllers\EofficeController::class, 'deletedirektorat']);
    Route::get('/direktorat/edit-direktorat/{id}', [App\Http\Controllers\EofficeController::class, 'editdirektorat']);
    Route::post('/direktorat/update-direktorat/{id}', [App\Http\Controllers\EofficeController::class, 'updatedirektorat']);


    //jabatan
    Route::get('/jabatan', [App\Http\Controllers\EofficeController::class, 'jabatan'])->name('jabatan');
    Route::get('/form-jabatan', [App\Http\Controllers\EofficeController::class, 'form_jabatan'])->name('form_jabatan');
    Route::post('/insert-jabatan', [App\Http\Controllers\EofficeController::class, 'insert_jabatan'])->name('insert_jabatan');
    Route::get('/jabatan/delete-jabatan/{id}', [App\Http\Controllers\EofficeController::class, 'deletejabatan']);
    Route::get('/jabatan/edit-jabatan/{id}', [App\Http\Controllers\EofficeController::class, 'editjabatan']);
    Route::post('/jabatan/update-jabatan/{id}', [App\Http\Controllers\EofficeController::class, 'updatejabatan']);
    Route::get('/jabatan/getdepartemen/{id}', [App\Http\Controllers\EofficeController::class, 'getdepartemen'])->name('getdepartemen');


    //jenis surat dan kategori surat
    Route::get('/jenis-surat', [App\Http\Controllers\EofficeController::class, 'jenis_surat'])->name('jenis');
    Route::get('/form-jenissurat', [App\Http\Controllers\EofficeController::class, 'form_jenissurat'])->name('form_jenissurat');
    Route::post('/insert-jenissurat', [App\Http\Controllers\EofficeController::class, 'insert_jenissurat'])->name('insert_jenissurat');
    Route::get('/jenis-surat/delete-jenis-surat/{id}', [App\Http\Controllers\EofficeController::class, 'deletejenis']);
    Route::get('/jenis-surat/edit-jenis-surat/{id}', [App\Http\Controllers\EofficeController::class, 'editjenis']);
    Route::post('/jenis-surat/update-jenis-surat/{id}', [App\Http\Controllers\EofficeController::class, 'updatejenis']);

    Route::get('/form-kategori', [App\Http\Controllers\EofficeController::class, 'form_kategori'])->name('form_kategori');
    Route::post('/insert-kategori', [App\Http\Controllers\EofficeController::class, 'insert_kategori'])->name('insert_kategori');


    //level jabatan
    Route::get('/level-jabatan', [App\Http\Controllers\EofficeController::class, 'level_jabatan'])->name('level');
    Route::get('/form-level', [App\Http\Controllers\EofficeController::class, 'form_level'])->name('form_level');
    Route::post('/insert-level', [App\Http\Controllers\EofficeController::class, 'insert_level'])->name('insert_level');
    Route::get('/level-jabatan/delete-level-jabatan/{id}', [App\Http\Controllers\EofficeController::class, 'deletelevel']);
    Route::get('/level-jabatan/edit-level-jabatan/{id}', [App\Http\Controllers\EofficeController::class, 'editlevel']);
    Route::post('/level-jabatan/update-level-jabatan/{id}', [App\Http\Controllers\EofficeController::class, 'updatelevel']);


    //pegawai
    Route::get('/pegawai', [App\Http\Controllers\EofficeController::class, 'pegawai'])->name('pegawai');
    Route::get('/form-pegawai', [App\Http\Controllers\EofficeController::class, 'form_pegawai'])->name('form_pegawai');
    Route::get('/pegawai/getdepartemenpegawai/{id}', [App\Http\Controllers\EofficeController::class, 'getdepartemen'])->name('getdepartemenpegawai');
    Route::post('/insert-pegawai', [App\Http\Controllers\EofficeController::class, 'insert_pegawai'])->name('insert_pegawai');
    Route::get('/pegawai/edit-pegawai/{id}', [App\Http\Controllers\EofficeController::class, 'editpegawai']);
    Route::get('/pegawai/delete-pegawai/{id}', [App\Http\Controllers\EofficeController::class, 'deletepegawai']);
    Route::post('/pegawai/update-pegawai/{id}', [App\Http\Controllers\EofficeController::class, 'updatepegawai']);




    //Surat

    //surat masuk
    Route::get('/surat-masuk', [App\Http\Controllers\EofficeController::class, 'surat_masuk'])->name('surat_masuk');
    Route::get('/surat-masuk/form-surat-masuk', [App\Http\Controllers\EofficeController::class, 'form_masuk'])->name('form_masuk');


    //surat keluar
    Route::get('/surat-keluar', [App\Http\Controllers\EofficeController::class, 'surat_keluar'])->name('surat_keluar');
    Route::get('/surat-keluar/form-surat-keluar', [App\Http\Controllers\EofficeController::class, 'form_keluar'])->name('form_keluar');


    //disposisi
    Route::get('/disposisi', [App\Http\Controllers\EofficeController::class, 'disposisi'])->name('disposisi');
    Route::get('/disposisi/form-disposisi', [App\Http\Controllers\EofficeController::class, 'form_disposisi'])->name('form_disposisi');


    //memo
    Route::get('/memo', [App\Http\Controllers\EofficeController::class, 'memo'])->name('memo');
    Route::get('/memo/form-memo', [App\Http\Controllers\EofficeController::class, 'form_memo'])->name('form_memo');
});