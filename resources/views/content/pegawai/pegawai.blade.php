@extends('template.index')

@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Data</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Pegawai</a></li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Pegawai</h4>
                        <a class="btn btn-primary btn-sm" href="" role="button">+ Tambah Pegawai</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">NIK</th>
                                    <th class="text-center">No KTP</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">NPWP</th>
                                    <th class="text-center">Jabatan</th>
                                    <th class="text-center">Direktorat</th>
                                    <th class="text-center">Departemen</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0; ?>

                                @foreach($pegawai as $p)

                                <?php 
                                $no++;
                                ?>
                                <tr class="text-black">
                                    <td class="text-center">{{ $no }}.</td>
                                    <td>{{$p->nik}}<td>
                                    <td>{{$p->no_ktp}}</td>
                                    <td>{{$p->nama_pegawai}}</td>
                                    <td>{{$p->npwp}}</td>
                                    <td>{{$p->jabatan_id->direktorat_id}}</td>
                                    <td>{{$p->jabatan_id->departemen_id}}</td>
                                    <td class="text-center">
                                        <span style="float right">     
                                            <a class="btn btn-warning btn-sm" href="{{$p->id}}" type="button"><img src="{{asset('asset/edit1.png')}}"/></a>
                                            <a class="btn btn-danger btn-sm text-white" href="{{$p->id}}" role="button"><img src="{{asset('asset/delete.png')}}"/></a>
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