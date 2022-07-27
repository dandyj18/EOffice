@extends('template.index')

@section('content')

<div class="content">
    <div class="container-fluid mt-3 center">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <a href="{{route('admin.surat_keluar')}}">
                    <div class="card gradient-1">
                        <div class="card-body">
                            <h3 class="card-title text-white">Surat Keluar(Keluar)</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">0</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="{{route('admin.surat_keluar')}}">
                    <div class="card gradient-2">
                        <div class="card-body">
                            <h3 class="card-title text-white">Surat Keluar(Sukses)</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">0</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="{{route('admin.surat_masuk')}}">
                    <div class="card gradient-3">
                        <div class="card-body">
                            <h3 class="card-title text-white">Surat Masuk</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">0</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="{{route('admin.disposisi')}}">
                    <div class="card gradient-4">
                        <div class="card-body">
                            <h3 class="card-title text-white">Disposisi</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">0</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <a href="{{route('admin.memo')}}">
                    <div class="card gradient-7">
                        <div class="card-body">
                            <h3 class="card-title text-white">Memo</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">0</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="{{route('admin.direktorat')}}">
                    <div class="card gradient-9">
                        <div class="card-body">
                            <h3 class="card-title text-white">Direktorat</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{{ $dir }}</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="{{route('admin.devisi')}}">
                    <div class="card gradient-6">
                        <div class="card-body">
                            <h3 class="card-title text-white">Devisi</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{{ $devisi }}</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="{{route('admin.departemen')}}">
                    <div class="card gradient-9">
                        <div class="card-body">
                            <h3 class="card-title text-white">Departemen</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{{ $departemen }}</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-6">
                <a href="{{route('admin.seksi')}}">
                    <div class="card gradient-2">
                        <div class="card-body">
                            <h3 class="card-title text-white">Seksi</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{{ $seksi }}</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="{{route('admin.pegawai')}}">
                    <div class="card gradient-1">
                        <div class="card-body">
                            <h3 class="card-title text-white">Pegawai</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{{ $pegawai }}</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection