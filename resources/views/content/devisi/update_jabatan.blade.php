@extends('template.index')

@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a >Data</a></li>
            <li class="breadcrumb-item"><a href="{{route('jabatan')}}">Jabatan</a></li>
            <li class="breadcrumb-item active">Update Jabatan</li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-center"><h3>Jabatan</h3></div>
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        {{ $error }} <br/>
                        @endforeach
                    </div>
                    @endif
                    <div class="basic-form">
                        <form action="{{url('/direktorat/update-jabatan/' . $jabatan->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <center>
                                <div class="form-group col-md-8">
                                    <div class="mb-3">
                                        <select class="custom-select mr-sm-2" name="leveljabatan_id" required="required" aria-label="Default select example">
                                            <option value="{{ $jabatan->leveljabatan->id }}" selected>{{ $jabatan->leveljabatan->level_jabatan }}</option>

                                            @foreach($level as $le)
                                                <option value="{{ $le->id }}">{{ $le->level_jabatan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <select class="custom-select mr-sm-2" name="direktorat_id" required="required" aria-label="Default select example">
                                            <option value="{{ $jabatan->direktorat->id }}" selected>{{ $jabatan->direktorat->nama_direktorat }}</option>

                                            @foreach($dir as $di)
                                                <option value="{{ $di->id }}">{{ $di->nama_direktorat }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <select class="custom-select mr-sm-2" name="devisidepartement_id" required="required" aria-label="Default select example">
                                            <option value="{{ $jabatan->devisidepartement->id }}" selected>{{ $jabatan->devisidepartement->kode_departemen }}</option>

                                            @foreach($departemen as $dd)
                                                <option value="{{ $dd->id }}">{{ $dd->kode_departemen }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control input-Default" name="kode_jabatan" required="required" placeholder="Kode Jabatan" value="{{ $jabatan->kode_jabatan }}"  >
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control input-Default" name="jabatan" required="required" placeholder="Jabatan" value="{{ $jabatan->jabatan }}">
                                </div>
                                    <div class="mb-3">
                                        
                                            <span>
                                                <input class="btn btn-primary" type="submit" value="Submit" onClick="return confirm('Apakah data yang dimasukkan sudah benar ?')">
                                                <a class="btn btn-success text-white" href="{{route('jabatan')}}" role="button">Kembali</a>
                                            </span>
                                        
                                    </div>
                                </div>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection