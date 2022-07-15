@extends('template.index')

@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Surat</li>
            <li class="breadcrumb-item"><a href="{{route('surat_masuk')}}">Surat Masuk</a></li>
            <li class="breadcrumb-item active">Insert Surat Masuk</li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Surat Masuk</h4>
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        {{ $error }} <br/>
                        @endforeach
                    </div>
                    @endif
                    <div class="basic-form">
                        <center>
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group col-md-8">
                                    <div class="mb-3">
                                        <input type="text" class="form-control input-default" name="no_surat" placeholder="Nomor Surat" required="required">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control input-default" name="pengirim" placeholder="Nama Pengirim" required="required">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control input-default" name="perihal" placeholder="Perihal" required="required">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" style="margin-right: 86%;">Tanggal Surat</label>
                                        <input type="date" class="form-control input-default" name="tgl_surat" placeholder="Tanggal Surat" required="required">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" style="margin-right: 84%;">Tanggal Masuk</label>
                                        <input type="date" class="form-control input-default" name="tgl_masuk" placeholder="Tanggal Masuk"required="required">
                                    </div>
                                    <div class="mb-3">
                                        <input type="file" class="form-control-file" name="file_surat" required="required">
                                    </div>
                                    <div class="mb-3">
                                        <span style="float-right">
                                            <input class="btn btn-primary" type="submit" value="Submit" onClick="return confirm('Apakah data yang dimasukkan sudah benar ?')">
                                            <a class="btn btn-success text-white" href="{{route('surat_masuk')}}" role="button">Kembali</a>
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