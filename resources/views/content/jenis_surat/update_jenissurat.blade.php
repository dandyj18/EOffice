@extends('template.index')

@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a >Data</a></li>
            <li class="breadcrumb-item"><a href="{{route('jenis')}}">Jenis Surat</a></li>
            <li class="breadcrumb-item active">Update Data Jenis Surat</li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-center"><h3>Jenis Surat</h3></div>
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        {{ $error }} <br/>
                        @endforeach
                    </div>
                    @endif
                    <div class="basic-form">
                        <form action="{{url('jenis-surat/update-jenis-surat' . $jenis->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <center>
                                <div class="form-group col-md-8">
                                    <div class="mb-3">
                                        <select class="custom-select mr-sm-2" name="kategori_id" required="required" aria-label="Default select example">
                                            <option disabled value="{{ $jenis->kategori->id }}" selected>{{ $jenis->kategori->nama_kategori }}</option>

                                            @foreach($kategori as $k)
                                                <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control input-Default" name="nama_jenis" required="required" placeholder="Nama Jenis Surat" value="{{ $jenis->nama_jenis }}">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control input-Default" name="kode_jenis" required="required" placeholder="Kode" value="{{ $jenis->kode_jenis }}">
                                    </div>
                                    <div class="mb-3">
                                        <span>
                                            <input class="btn btn-primary" type="submit" value="Submit" onClick="return confirm('Apakah data yang dimasukkan sudah benar ?')">
                                            <a class="btn btn-success text-white" href="{{route('jenis')}}" role="button">Kembali</a>
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