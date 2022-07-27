@extends('template.index')

@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Data</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Seksi</a></li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Seksi</h4>
                        <a class="btn btn-primary btn-sm" href="{{route('admin.form_seksi')}}" role="button">+ Data</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Nama Direktorat</th>
                                    <th class="text-center">Devisi</th>
                                    <th class="text-center">Nama Departemen</th>
                                    <th class="text-center">Kode Seksi</th>
                                    <th class="text-center">Seksi</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0; ?>

                                @foreach($seksi as $s)

                                <?php 
                                $no++;
                                ?>
                                <tr class="text-black">
                                    <td class="text-center">{{ $no }}.</td>
                                    <td>{{$s->direktorat->nama_direktorat}}</td>
                                    <td class="text-center">{{$s->devisi->nama_devisi}}</td>
                                    <td class="text-center">{{$s->departemen->nama_departemen}}</td>
                                    <td class="text-center">{{$s->kode_seksi}}</td>
                                    <td class="text-center">{{$s->nama_seksi}}</td>
                                    <td class="text-center">
                                        <span style="float right">     
                                            <a class="btn btn-warning btn-sm" href="seksi/edit-seksi/{{$s->id}}" type="button"><img src="{{asset('asset/edit1.png')}}"/></a>
                                            <a class="btn btn-danger btn-sm text-white" href="seksi/delete-seksi/{{$s->id}}" role="button"><img src="{{asset('asset/delete.png')}}"/></a>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection