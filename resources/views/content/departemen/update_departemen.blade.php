@extends('template.index')

@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a >Data</a></li>
            <li class="breadcrumb-item"><a href="{{route('departemen')}}">Devisi Departemen</a></li>
            <li class="breadcrumb-item active"><a href="{{route('update_departemen')}}">Update Data Devisi Departemen</a></li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title"><h3 class="text-center">Devisi Departemen</h3></div>
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        {{ $error }} <br/>
                        @endforeach
                    </div>
                    @endif
                    <div class="basic-form">
                        <form action="{{url('departemen/update-departemen', $departemen->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <center>
                            <div class="form-group col-md-8">
                                <div class="mb-3">
                                    <input type="text" class="form-control input-Default" name="kode_departemen" required="required" placeholder="Kode Departemen" value="{{$departemen->kode_departemen}}">
                                </div>
                                <div class="mb-3">
                                    <select class="custom-select mr-sm-2" name="direktorat_id" required="required" aria-label="Default select example">
                                        <option disabled value="{{ $departemen->direktorat->id }}" selected>{{ $departemen->direktorat->nama_direktorat }}</option>

                                        @foreach($dir as $di)
                                            <option value="{{ $di->id }}">{{ $di->nama_direktorat }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <span>
                                        <input class="btn btn-primary" type="submit" value="Submit" onClick="return confirm('Apakah data yang dimasukkan sudah benar ?')">
                                        <a class="btn btn-success text-white" href="{{route('departemen')}}" role="button">Kembali</a>
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