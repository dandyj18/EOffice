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

Route::get('/dashboard', [App\Http\Controllers\EofficeController::class, 'dashboard'])->name('dashboard');


//departemen
Route::get('/departemen', [App\Http\Controllers\EofficeController::class, 'departemen'])->name('departemen');
Route::get('/form-departemen', [App\Http\Controllers\EofficeController::class, 'form_departemen'])->name('form_departemen');
Route::post('/insert-departemen', [App\Http\Controllers\EofficeController::class, 'insert_depar'])->name('insert_departemen');
Route::get('/departemen/delete-departemen/{id}', [App\Http\Controllers\EofficeController::class, 'deletedepartemen']);
Route::get('/departemen/edit-departemen/{id}', [App\Http\Controllers\EofficeController::class, 'editdepartemen'])->name('update_departemen');
Route::get('/departemen/update-departemen/{id}', [App\Http\Controllers\EofficeController::class, 'updatedepartemen']);


//direktorat
Route::get('/direktorat', [App\Http\Controllers\EofficeController::class, 'direktorat'])->name('direktorat');
Route::get('/direktorat/form-direktorat', [App\Http\Controllers\EofficeController::class, 'form_direktorat'])->name('form_direktorat');
Route::get('/direktorat/insert-direktorat', [App\Http\Controllers\EofficeController::class, 'insert_direktorat'])->name('insert_direktorat');
Route::get('/direktorat/delete-direktorat/{id}', [App\Http\Controllers\EofficeController::class, 'deletedirektorat']);
Route::get('/direktorat/edit-direktorat/{id}', [App\Http\Controllers\EofficeController::class, 'editdirektorat'])->name('update_direktorat');
Route::get('/direktorat/update-direktorat/{id}', [App\Http\Controllers\EofficeController::class, 'updatedirektorat']);


//jabatan
Route::get('/jabatan', [App\Http\Controllers\EofficeController::class, 'jabatan'])->name('jabatan');
Route::get('/form-jabatan', [App\Http\Controllers\EofficeController::class, 'form_jabatan'])->name('form_jabatan');
Route::get('/insert-jabatan', [App\Http\Controllers\EofficeController::class, 'insert_jabatan'])->name('insert_jabatan');
Route::get('/jabatan/delete-jabatan/{id}', [App\Http\Controllers\EofficeController::class, 'deletejabatan']);
Route::get('/jabatan/edit-jabatan/{id}', [App\Http\Controllers\EofficeController::class, 'editjabatan'])->name('update_jabatan');
Route::get('/jabatan/update-jabatan/{id}', [App\Http\Controllers\EofficeController::class, 'updatejabatan']);


//jenis surat dan kategori surat
Route::get('/jenis-surat', [App\Http\Controllers\EofficeController::class, 'jenis_surat'])->name('jenis');
Route::get('/form-jenissurat', [App\Http\Controllers\EofficeController::class, 'form_jenissurat'])->name('form_jenissurat');
Route::get('/insert-jenissurat', [App\Http\Controllers\EofficeController::class, 'insert_jenissurat'])->name('insert_jenissurat');
Route::get('/jenis-surat/delete-jenis-surat/{id}', [App\Http\Controllers\EofficeController::class, 'deletejenis']);
Route::get('/jenis-surat/edit-jenis-surat/{id}', [App\Http\Controllers\EofficeController::class, 'editjenis'])->name('update_jenis');
Route::get('/jenis-surat/update-jenis-surat/{id}', [App\Http\Controllers\EofficeController::class, 'updatejenis']);

Route::get('/form-kategori', [App\Http\Controllers\EofficeController::class, 'form_kategori'])->name('form_kategori');
Route::get('/insert-kategori', [App\Http\Controllers\EofficeController::class, 'insert_kategori'])->name('insert_kategori');


//level jabatan
Route::get('/level-jabatan', [App\Http\Controllers\EofficeController::class, 'level_jabatan'])->name('level');
Route::get('/form-level', [App\Http\Controllers\EofficeController::class, 'form_level'])->name('form_level');
Route::get('/insert-level', [App\Http\Controllers\EofficeController::class, 'insert_level'])->name('insert_level');
Route::get('/level-jabatan/delete-level-jabatan/{id}', [App\Http\Controllers\EofficeController::class, 'deletelevel']);
Route::get('/level-jabatan/edit-level-jabatan/{id}', [App\Http\Controllers\EofficeController::class, 'editlevel'])->name('update_level');
Route::get('/level-jabatan/update-level-jabatan/{id}', [App\Http\Controllers\EofficeController::class, 'updatelevel']);


//pegawai
Route::get('/pegawai', [App\Http\Controllers\EofficeController::class, 'pegawai'])->name('pegawai');