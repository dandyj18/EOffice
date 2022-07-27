@extends('template.index')

@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Data</li>
            <li class="breadcrumb-item"><a href="{{route('admin.pegawai')}}">Pegawai</a></li>
            <li class="breadcrumb-item active">Update Pegawai</li>
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
                        <form action="{{url('pegawai/update-pegawai/' . $pegawai->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group col-md-8">
                                    <div class="mb-3">
                                        <input type="text" class="form-control input-Default" name="nik" required="required" placeholder="NIK" value="{{$pegawai->nik}}">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control input-Default" name="no_ktp" required="required" placeholder="Nomor KTP"  value="{{$pegawai->no_ktp}}">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control input-Default" name="nama_pegawai" required="required" placeholder="Nama"  value="{{$pegawai->nama_pegawai}}">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control input-Default" name="npwp" required="required" placeholder="NPWP"  value="{{$pegawai->npwp}}">
                                    </div>
                                    <div class="mb-3">
                                        <select class="custom-select mr-sm-2" name="jabatan_id" required="required" aria-label="Default select example">
                                            <option selected value="{{ $pegawai->jabatan->id }}">{{ $pegawai->jabatan->jabatan }}</option>

                                            @foreach($jabatan as $j)
                                                <option value="{{ $j->id }}">{{ $j->jabatan }}</option>
                                            @endforeach

                                        </select>
                                        @error('jabatan_id')
                                            <div>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <select class="custom-select mr-sm-2" name="direktorat_id" id="direktorat_id" required="required" aria-label="Default select example">
                                            <option selected value="{{ $pegawai->direktorat->id }}">{{ $pegawai->direktorat->nama_direktorat }}</option>

                                            @foreach($dir as $di)
                                                <option value="{{ $di->id }}">{{ $di->nama_direktorat }}</option>
                                            @endforeach
                                        </select>
                                        @error('direktorat_id')
                                            <div>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <select class="custom-select mr-sm-2" name="devisidepartement_id" id="devisidepartement_id" required="required"  aria-label="Default select example">
                                            <option selected value="{{ $pegawai->devisidepartement->id }}">{{ $pegawai->devisidepartement->kode_departemen }}</option>

                                            @foreach($departemen as $de)
                                                <option value="{{ $de->id }}">{{ $de->kode_departemen }}</option>
                                            @endforeach

                                        </select>
                                        @error('devisidepartement_id')
                                            <div>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <span>
                                            <input class="btn btn-primary" type="submit" value="Submit" onClick="return confirm('Apakah data yang dimasukkan sudah benar ?')">
                                            <a class="btn btn-success text-white" href="{{route('admin.pegawai')}}" role="button">Kembali</a>
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