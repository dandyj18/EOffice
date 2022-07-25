@extends('template.index')

@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a >Data</a></li>
            <li class="breadcrumb-item"><a href="{{route('seksi')}}">Seksu</a></li>
            <li class="breadcrumb-item active"><a href="{{route('insert_seksi')}}">Insert Data Seksi</a></li>
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
                        <form action="{{route('insert_seksi')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <center>
                            <div class="form-group col-md-8">
                                <div class="mb-3">
                                    <select class="custom-select mr-sm-2" name="direktorat_id" required="required" aria-label="Default select example">
                                        <option disabled selected>Pilih Direktorat</option>

                                        @foreach($dir as $di)
                                            <option value="{{ $di->id }}">{{ $di->nama_direktorat }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <select class="custom-select mr-sm-2" name="devisi_id" required="required" aria-label="Default select example">
                                        <option disabled selected>Pilih Devisi</option>

                                        @foreach($devisi as $dev)
                                            <option value="{{ $dev->id }}">{{ $dev->nama_devisi }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <select class="custom-select mr-sm-2" name="departemen_id" required="required" aria-label="Default select example">
                                        <option disabled selected>Pilih Departemen</option>

                                        @foreach($departemen as $de)
                                            <option value="{{ $de->id }}">{{ $de->nama_departemen }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control input-Default" name="kode_seksi" required="required" placeholder="Kode Seksi">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control input-Default" name="nama_seksi" required="required" placeholder="Nama Seksi">
                                </div>
                                <div class="mb-3">
                                    <span>
                                        <input class="btn btn-primary" type="submit" value="Submit" onClick="return confirm('Apakah data yang dimasukkan sudah benar ?')">
                                        <a class="btn btn-success text-white" href="{{route('seksi')}}" role="button">Kembali</a>
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