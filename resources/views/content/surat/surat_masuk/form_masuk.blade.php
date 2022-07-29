@extends('template.index')

@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Surat</li>
            <li class="breadcrumb-item"><a href="{{route('admin.surat_masuk')}}">Surat Masuk</a></li>
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
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row ">
                                    <div class="form-group col-md-6">
                                        <label class="form-label">Jenis Surat</label>
                                        <input type="text" class="form-control input-default" name="no_surat" placeholder="Nomor Surat" required="required">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label">Nama Pengirim</label>
                                        <input type="text" class="form-control input-default" name="pengirim" required="required">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label">Perihal</label>
                                        <input type="text" class="form-control input-default" name="perihal" placeholder="Perihal" required="required">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label">Nomor Surat</label>
                                        <input type="text" class="form-control input-default" name="no_surat" placeholder="Nomor Surat" required="required">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label">Tanggal Surat</label>
                                        <input type="date" class="form-control input-default" name="tgl_surat"  required="required">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label">Tanggal Masuk</label>
                                        <input type="date" class="form-control input-default" name="tgl_masuk" required="required">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label">Tujuan</label>
                                        <input type="text" class="form-control input-default" name="perihal" placeholder="Tujuan" required="required">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label">Pegawai</label>
                                        <input type="text" class="form-control input-default" name="pegawai" placeholder="pegawai" required="required">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label">File</label>
                                        <input type="file" class="form-control" name="file_surat"  required="required">
                                    </div>
                                </div>
                                    <div class="mb-3" style="float:right;">
                                        <span>
                                            <input class="btn btn-primary" type="submit" value="Submit" onClick="return confirm('Apakah data yang dimasukkan sudah benar ?')">
                                            <a class="btn btn-success text-white" href="{{route('admin.surat_masuk')}}" role="button">Kembali</a>
                                        </span>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection