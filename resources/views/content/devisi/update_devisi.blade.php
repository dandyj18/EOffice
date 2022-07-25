@extends('template.index')

@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a >Data</a></li>
            <li class="breadcrumb-item"><a href="{{route('devisi')}}">Devisi</a></li>
            <li class="breadcrumb-item active">Update Devisi</li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title"><h3 class="text-center">Devisi</h3></div>
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        {{ $error }} <br/>
                        @endforeach
                    </div>
                    @endif
                    <div class="basic-form">
                        <form action="{{url('devisi/update-devisi/' . $devisi->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <center>
                            <div class="form-group col-md-8">
                                <div class="mb-3">
                                    <select class="custom-select mr-sm-2" name="direktorat_id" required="required" aria-label="Default select example">
                                        <option value="{{ $devisi->direktorat->id }}" selected>{{ $devisi->direktorat->nama_direktorat }}</option>

                                        @foreach($dir as $d)
                                        @if($di->id == 1)
                                            @continue
                                        @endif
                                            <option value="{{ $d->id }}">{{ $d->nama_direktorat }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control input-Default" name="kode_devisi" required="required" placeholder="Kode Devisi" value="{{$devisi->kode_devisi}}">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control input-Default" name="nama_devisi" required="required" placeholder="Nama Devisi" value="{{$devisi->nama_devisi}}">
                                </div>
                                <div class="form-group mb-3">
                                    <span>
                                        <input class="btn btn-primary" type="submit" value="Submit" onClick="return confirm('Apakah data yang dimasukkan sudah benar ?')">
                                        <a class="btn btn-success text-white" href="{{route('devisi')}}" role="button">Kembali</a>
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