@extends('template.index')

@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a >Data</a></li>
            <li class="breadcrumb-item"><a href="{{route('jenis')}}">Jenis Surat</a></li>
            <li class="breadcrumb-item active"><a href="{{route('insert_kategori')}}">Insert Kategori</a></li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-center"><h3>Kategori</h3></div>
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        {{ $error }} <br/>
                        @endforeach
                    </div>
                    @endif
                    <div class="basic-form">
                        <center>
                        <form action="{{route('insert_kategori')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group col-md-8">
                                    <div class="mb-3">
                                        <input type="text" class="form-control input-Default" name="no_kategori" required="required" placeholder="Kode">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control input-Default" name="nama_kategori" required="required" placeholder="Nama">
                                    </div>
                                    <div class="mb-3">
                                        <span>
                                            <input class="btn btn-primary mr-auto" type="submit" value="Submit" onClick="return confirm('Apakah data yang dimasukkan sudah benar ?')">
                                            <a class="btn btn-success text-white mr-auto" href="{{route('jenis')}}" role="button">Kembali</a>
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