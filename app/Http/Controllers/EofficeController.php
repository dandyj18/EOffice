<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\direktorat;
use App\Models\departemen;
use App\Models\jenis_surat;
use App\Models\jabatan;
use App\Models\level_jabatan;
use App\Models\pegawai;
use App\Models\kategori;

class EofficeController extends Controller
{
    public function dashboard(){
        $pegawai = pegawai::count();
        $departemen = departemen::count();
        $dir = direktorat::count();

        return view('content.dashboard', ['pegawai' => $pegawai,'departemen' => $departemen, 'dir' => $dir]);
    }



    //direktorat
    public function direktorat(){
        $dir = direktorat::all();

        return view('content.direktorat.direktorat', ['dir' => $dir]);
    }

    public function form_direktorat(){
        return view('content.direktorat.form_direktorat');
    }

    public function insert_direktorat(Request $request){
        $request -> validate([
            'kode_direktorat' => 'required',
            'nama_direktorat' => 'required'
        ]);
        
        
        direktorat::create([
            'kode_direktorat' => $request->kode_direktorat,
            'nama_direktorat' => $request->nama_direktorat
        ]);

        return redirect()->route('direktorat');
    }

    public function deletedirektorat($id)
    {
        $dir = direktorat::findOrFail($id);

        $dir->delete();
        return redirect()->route('direktorat');
    }

    public function editdirektorat($id)
    {
        $dir = direktorat::findOrFail($id);

        return view('content.direktorat.update_direktorat', ['dir' => $dir]);
    }

    public function updatdirektorat($id, Request $request)
    {
        $this->validate($request,[
            'kode_direktorat' => 'required',
            'nama_direktorat' => 'required'
        ]);
    
        $dir = direktorat::findOrFail($id);
        $dir->kode_direktorat = $request->kode_direktorat;
        $dir->nama_direktorat = $request->nama_direktorat;
        $dir->save();
        return redirect()->route('direktorat');
    }



    //departemen
    public function departemen(){
        $departemen = departemen::all();

        return view('content.departemen.departemen', ['departemen' => $departemen]);
    }

    public function form_departemen(){
        $dir = direktorat::all();

        return view('content.departemen.form_departemen', ['dir' => $dir]);
    }

    public function insert_depar(Request $request){
        $request -> validate([
            'kode_departemen' => 'required',
            'direktorat_id' => 'required'
        ]);
        
        
        $departemen = departemen::create([
            'kode_departemen' => $request->kode_departemen,
            'direktorat_id' => $request->direktorat_id
        ]);

        return redirect()->route('departemen');
    }

    public function deletedepartemen($id)
    {
        $departemen = departemen::findOrFail($id);

        $departemen->delete();
        return redirect()->route('departemen');
    }

    public function editdepartemen($id)
    {
        $departemen = departemen::find($id);
        $dir = direktorat::all();

        return view('content.departemen.update_departemen', ['departemen' => $departemen, 'dir' => $dir]);
    }
    
    public function updatdepartemen($id, Request $request)
    {
        $this->validate($request,[
            'kode_departemen' => 'required',
            'direktorat_id' => 'required'
        ]);
    
        $departemen = departemen::find($id);
        $departemen->kode_departemen = $request->kode_departemen;
        $departemen->direktorat_id = $request->direktorat_id;
        $departemen->save();
        return redirect()->route('depatemen');
    }



    //jenis surat dan kategori
    public function form_kategori(){
        
        return view('content.kategori dan jenis surat.form_kategori');
    }

    public function insert_kategori(Request $request){
        $request -> validate([
            'no_kategori' => 'required',
            'nama_kategori' => 'required'
        ]);
        
        
        $kategori = kategori::create([
            'no_kategori' => $request->no_kategori,
            'nama_kategori' => $request->nama_kategori
        ]);

        return redirect()->route('jenis');
    }

    public function jenis_surat(){
        $jenis = jenis_surat::all();

        return view('content.kategori dan jenis surat.jenis_surat', ['jenis' => $jenis]);
    }

    public function form_jenissurat(){
        $kategori = kategori::all();

        return view('content.kategori dan jenis surat.form_jenissurat', ['kategori' => $kategori]);
    }

    public function insert_jenissurat(Request $request){
        $request -> validate([
            'kategori_id' => 'required',
            'nama_jenis' => 'required',
            'kode_jenis' => 'required',
        ]);
        
        
        jenis_surat::create([
            'kategori_id' => $request->kategori_id,
            'nama_jenis' => $request->nama_jenis,
            'kode_jenis' => $request->kode_jenis,
        ]);

        return redirect()->route('jenis');
    }

    public function deletejenis($id)
    {
        $jenis = jenis_surat::findOrFail($id);

        $jenis->delete();
        return redirect()->route('jenis');
    }

    public function editjenis($id)
    {
        $jenis = jenis_surat::find($id);
        $kategori = kategori::all();
        
        return view('content.kategori dan jenis surat.update_jenissurat', ['jenis' => $jenis, 'kategori' => $kategori]);
    }

    public function updatjenis($id, Request $request)
    {
        $this->validate($request,[
            'kategori_id' => 'required',
            'nama_jenis' => 'required',
            'kode_jenis' => 'required',
        ]);
    
        $jenis = jenis_surat::find($id);
        $jenis->kategori_id = $request->kategori_id;
        $jenis->nama_jenis = $request->nama_jenis;
        $jenis->kode_jenis = $request->nama_jenis;
        $jenis->save();
        return redirect()->route('jenis');
    }


    
    //jabatan
    public function jabatan(){
        $jabatan = jabatan::all();

        return view('content.jabatan.jabatan', ['jabatan' => $jabatan]);
    }


    public function form_jabatan(){
        $level = level_jabatan::all();
        $dir = direktorat::all()->pluck("nama_direktorat","id");
        $departemen = departemen::all();
        $jabatan = jabatan::all();

        return view('content.jabatan.form_jabatan', ['level' => $level, 'dir' => $dir, 'departemen' => $departemen, 'jabatan' => $jabatan]);
    }

    public function getdepartemen($id){
        $departemen = departemen::all()->where("direktorat_id", $id)->pluck("kode_departemen", "id");

        return json_encode($departemen);
    }

    public function insert_jabatan(Request $request){
        $request -> validate([
            'leveljabatan_id' => 'required',
            'direktorat_id' => 'required',
            'devisidepartement_id' => 'required',
            'kode_jabatan' => 'required',
            'jabatan' => 'required'
        ]);
        
        
        jabatan::create([
            'leveljabatan_id' => $request->leveljabatan_id,
            'direktorat_id' => $request->direktorat_id,
            'devisidepartement_id' => $request->devisidepartement_id,
            'kode_jabatan' => $request->kode_jabatan,
            'jabatan' => $request->jabatan,
        ]);

        return redirect()->route('jabatan');
    }

    public function deletejabatan($id)
    {
        $jabatan = jabatan::findOrFail($id);

        $jabatan->delete();
        return redirect()->route('jabatan');
    }

    public function editjabatan($id)
    {
        $jabatan = jabatan::find($id);
        $level = level_jabatan::all();
        $departemen = departemen::all();
        $dir = direktorat::all();
        
        return view('content.jabatan.update_jabatan', ['jabatan' => $jabatan, 'level' => $level, 'departemen' => $departemen, 'dir' => $dir]);
    }

    public function updatejabatan($id, Request $request)
    {
        $this->validate($request,[
            'leveljabatan_id' => 'required',
            'direktorat_id' => 'required',
            'kode_jabatan' => 'required',
            'nama_jabatan' => 'required'
        ]);
    
        $jabatan = jabatan::find($id);
        $jabatan->leveljabatan_id = $request->leveljabatan_id;
        $jabatan->devisidepartement_id = $request->devisidepartement_id;
        $jabatan->direktorat_id = $request->direktorat_id;
        $jabatan->kode_jabatan = $request->kode_jabatan;
        $jabatan->nama_jabatan = $request->nama_jabatan;
        $jabatan->save();
        return redirect()->route('jabatan');
    }



    //level jabatan
    public function level_jabatan(){
        $level = level_jabatan::all();
        
        return view('content.level jabatan.level_jabatan', ['level' => $level]);
    }

    public function form_level(){

        return view('content.level jabatan.form_level');

    }

    public function insert_level(Request $request){
        $request -> validate([
            'level_jabatan' => 'required'
        ]);
        
        
        level_jabatan::create([
            'level_jabatan' => $request->level_jabatan
        ]);

        return redirect()->route('level');
    }


    public function deletelevel($id)
    {
        $level = level_jabatan::findOrFail($id);

        $level->delete();
        return redirect()->route('level');
    }

    public function editlevel($id)
    {
        $level = level_jabatan::find($id);
        
        return view('content.level jabatan.update_level', ['level' => $level]);
    }

    public function updatlevel($id, Request $request)
    {
        $this->validate($request,[
            'level_jabatan' => 'required'
        ]);
    
        $level = level_jabatan::find($id);
        $level->level_jabatan = $request->level_jabatan;
        $level->save();
        return redirect()->route('level');
    }



    //pegawai
    public function pegawai(){
        $pegawai = pegawai::all();

        return view('content.pegawai.pegawai', ['pegawai' => $pegawai]);
    }

    public function form_pegawai(){
        $pegawai = pegawai::all();
        $dir = direktorat::all()->pluck("nama_direktorat","id");
        $departemen = departemen::all();
        $jabatan = jabatan::all();

        return view('content.pegawai.form_pegawai', ['pegawai' => $pegawai, 'dir' => $dir, 'departemen' => $departemen, 'jabatan' => $jabatan]);
    }

    public function getdepartemenpegawai($id){
        $departemen = departemen::all()->where("direktorat_id", $id)->pluck("kode_departemen", "id");

        return json_encode($departemen);
    }

    public function insert_pegawai(Request $request){
        $request -> validate([
            'nik' => 'required',
            'no_ktp' => 'required',
            'nama_pegawai' => 'required',
            'npwp' => 'required',
            'jabatan_id' => 'required',
            'direktorat_id' => 'required',
            'devisidepartement_id' => 'required',
        ]);

        pegawai::create([
            'nik' => $request->nik,
            'no_ktp' => $request->no_ktp,
            'nama_pegawai' => $request->nama_pegawai,
            'npwp' => $request->npwp,
            'jabatan_id' => $request->jabatan_id,
            'direktorat_id' => $request->direktorat_id,
            'devisidepartement_id' => $request->devisidepartement_id,
        ]);
        
        return redirect()->route('pegawai');
    }

    public function editpegawai($id)
    {
        $pegawai = pegawai::find($id);
        $jabatan = jabatan::all();
        $departemen = departemen::all();
        $dir = direktorat::all();
        
        return view('content.pegawai.update_pegawai', ['jabatan' => $jabatan, 'pegawai' => $pegawai, 'departemen' => $departemen, 'dir' => $dir]);
    }

    public function deletepegawai($id)
    {
        $pegawai = pegawai::findOrFail($id);

        $pegawai->delete();
        return redirect()->route('pegawai');
    }

    public function updatepegawai($id, Request $request)
    {
        $this->validate($request,[
            'nik' => 'required',
            'no_ktp' => 'required',
            'nama_pegawai' => 'required',
            'npwp' => 'required',
            'jabatan_id' => 'required',
            'direktorat_id' => 'required',
            'devisidepartement_id' => 'required',
        ]);
    
        $pegawai = pegawai::find($id);
        $pegawai->nik = $request->nik;
        $pegawai->no_ktp = $request->no_ktp;
        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->npwp = $request->npwp;
        $pegawai->jabatan_id = $request->jabatan_id;
        $pegawai->direktorat_id = $request->direktorat_id;
        $pegawai->devisidepartement_id = $request->devisidepartement_id;
        $pegawai->save();

        return redirect()->route('pegawai');
    }

    //surat masuk
    public function surat_masuk()
    {
        
        return view('content.surat.surat_masuk.surat_masuk');
    }

    public function form_masuk()
    {
        
        return view('content.surat.surat_masuk.form_masuk');
    }


    //surat keluar
    public function surat_keluar()
    {
        
        return view('content.surat.surat_keluar.surat_keluar');
    }
    
    public function form_keluar()
    {
        
        return view('content.surat.surat_keluar.form_keluar');
    }

    //Disposisi
    public function disposisi()
    {
        
        return view('content.surat.disposisi.disposisi');
    }

    //Memo
    public function memo()
    {
        
        return view('content.surat.memo.memo');
    }

    public function form_memo()
    {
        
        return view('content.surat.memo.form_memo');
    }
}
