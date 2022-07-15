@extends('template.index')

@section('content')

<div class="content">
    <div class="container-fluid mt-3 center">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <a href="{{route('surat_keluar')}}">
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
                <a href="{{route('surat_keluar')}}">
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
                <a href="{{route('surat_masuk')}}">
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
                <a href="{{route('disposisi')}}">
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
                <a href="{{route('memo')}}">
                    <div class="card gradient-5">
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
                <a href="{{route('pegawai')}}">
                    <div class="card gradient-6">
                        <div class="card-body">
                            <h3 class="card-title text-white">Pegawai</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{{ $pegawai }}</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="{{route('departemen')}}">
                    <div class="card gradient-7">
                        <div class="card-body">
                            <h3 class="card-title text-white">Devisi Departemen</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{{ $departemen }}</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="{{route('direktorat')}}">
                    <div class="card gradient-8">
                        <div class="card-body">
                            <h3 class="card-title text-white">Direktorat</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{{ $dir }}</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection