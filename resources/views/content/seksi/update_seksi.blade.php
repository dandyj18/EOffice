@extends('template.index')

@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a >Data</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin.seksi')}}">Seksi</a></li>
            <li class="breadcrumb-item active">Update Data Seksi</li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title"><h3 class="text-center">Seksi</h3></div>
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        {{ $error }} <br/>
                        @endforeach
                    </div>
                    @endif
                    <div class="basic-form">
                        <form action="{{url('seksi/update-seksi/' . $seksi->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <center>
                            <div class="form-group col-md-8">
                                <div class="mb-3">
                                    <select class="custom-select mr-sm-2" name="direktorat_id" required="required" aria-label="Default select example">
                                        <option value="{{ $seksi->direktorat->id }}" selected>{{ $seksi->direktorat->nama_direktorat }}</option>

                                        @foreach($dir as $di)
                                        @if($di->id == 1)
                                            @continue
                                        @endif
                                            <option value="{{ $di->id }}">{{ $di->nama_direktorat }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <select class="custom-select mr-sm-2" name="devisi_id" required="required" aria-label="Default select example">
                                        <option value="{{ $seksi->devisi->id }}" selected>{{ $seksi->devisi->nama_devisi }}</option>

                                        @foreach($devisi as $d)
                                        @if($d->id == 1)
                                            @continue
                                        @endif
                                            <option value="{{ $d->id }}">{{ $d->nama_devisi }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <select class="custom-select mr-sm-2" name="departemen_id" required="required" aria-label="Default select example">
                                        <option value="{{ $seksi->departemen->id }}" selected>{{ $seksi->departemen->nama_departemen }}</option>

                                        @foreach($departemen as $de)
                                        @if($de->id == 1)
                                            @continue
                                        @endif
                                            <option value="{{ $de->id }}">{{ $de->nama_departemen }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control input-Default" name="kode_seksi" required="required" placeholder="Kode Seksi" value="{{$seksi->kode_seksi}}">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control input-Default" name="nama_seksi" required="required" placeholder="Nama Seksi" value="{{$seksi->nama_seksi}}">
                                </div>
                                <div class="mb-3">
                                    <span>
                                        <input class="btn btn-primary" type="submit" value="Submit" onClick="return confirm('Apakah data yang dimasukkan sudah benar ?')">
                                        <a class="btn btn-success text-white" href="{{route('admin.seksi')}}" role="button">Kembali</a>
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