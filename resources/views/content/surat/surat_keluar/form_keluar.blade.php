@extends('template.index')

@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Surat</li>
            <li class="breadcrumb-item"><a href="{{route('admin.surat_keluar')}}">Surat Keluar</a></li>
            <li class="breadcrumb-item active">Insert Surat Keluar</li>
        </ol>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-center"><h3 >Surat Keluar</h3></div>
                    <livewire:wizard />
                </div>
            </div>
        </div>
    </div>
</div>

@livewireScripts

@endsection
