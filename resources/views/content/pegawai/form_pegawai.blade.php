@extends('template.index')

@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Data</li>
            <li class="breadcrumb-item"><a href="{{route('pegawai')}}">Pegawai</a></li>
            <li class="breadcrumb-item active"><a href="">Insert Pegawai</a></li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-center"><h3>Pegawai</h3></div>
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        {{ $error }} <br/>
                        @endforeach
                    </div>
                    @endif
                    <center>
                    <div class="basic-form">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group col-md-8">
                                    <div class="mb-3">
                                        <input type="text" class="form-control input-Default" name="nik" required="required" placeholder="NIK">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control input-Default" name="no_ktp" required="required" placeholder="Nomor KTP">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control input-Default" name="nama_pegawai" required="required" placeholder="Nama">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control input-Default" name="npwp" required="required" placeholder="NPWP">
                                    </div>
                                    <div class="mb-3">
                                        <select class="custom-select mr-sm-2" name="leveljabatan_id" required="required" aria-label="Default select example">
                                            <option disabled selected>Pilih Jabatan</option>

                                            @foreach($jabatan as $j)
                                                <option value="{{ $j->jabatan }}">{{ $j->jabatan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <select class="custom-select mr-sm-2" name="devisidepartement_id" required="required" aria-label="Default select example">
                                            <option disabled selected>Pilih Devisi Departemen</option>

                                            @foreach($departemen as $dd)
                                                <option value="{{ $dd->id }}">{{ $dd->kode_departemen }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <select class="custom-select mr-sm-2" name="direktorat_id" required="required" aria-label="Default select example">
                                            <option disabled selected>Pilih Direktorat</option>

                                            @foreach($dir as $di)
                                                <option value="{{ $di->id }}">{{ $di->nama_direktorat }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <span>
                                            <input class="btn btn-primary" type="submit" value="Submit" onClick="return confirm('Apakah data yang dimasukkan sudah benar ?')">
                                            <a class="btn btn-success text-white" href="{{route('pegawai')}}" role="button">Kembali</a>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection