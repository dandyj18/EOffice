@extends('template.index')

@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a >Data</a></li>
            <li class="breadcrumb-item"><a href="{{route('direktorat')}}">Direktorat</a></li>
            <li class="breadcrumb-item active"><a href="{{route('update_direktorat')}}">Update Direktorat</a></li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-center"><h3 >Direktorat</h3></div>
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        {{ $error }} <br/>
                        @endforeach
                    </div>
                    @endif
                    <div class="basic-form">
                        <form action="{{url('direktoprat/update-direktorat', $dir->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <center>
                            <div class="form-group col-md-8">
                                <div class="mb-3">
                                    <input type="text" class="form-control input-Default" name="kode_direktorat" required="required" placeholder="Kode Direktorat" value="{{$dir->kode_direktorat}}">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control input-Default" name="nama_direktorat" required="required" placeholder="Nama Direktorat" value="{{$dir->nama_direktorat}}">
                                </div>
                                <div class="mb-3">
                                    <span>
                                        <input class="btn btn-primary mr-auto" type="submit" value="Submit" onClick="return confirm('Apakah data yang dimasukkan sudah benar ?')">
                                        <a class="btn btn-success text-white mr-auto" href="{{route('direktorat')}}" role="button">Kembali</a>
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