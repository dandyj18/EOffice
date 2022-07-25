@extends('template.index')

@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Data</a></li>
            <li class="breadcrumb-item active"><a href="{{route('jabatan')}}">Jabatan</a></li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Jabatan</h4>
                        <a class="btn btn-primary btn-sm" href="{{route('form_jabatan')}}" role="button">+ Data</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Nama Direktorat</th>
                                    <th class="text-center">Kode Devisi</th>
                                    <th class="text-center">Devisi</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0; ?>

                                @foreach($jabatan as $ja)

                                <?php 
                                $no++;
                                ?>
                                <tr class="text-black">
                                    <td class="text-center">{{ $no }}.</td>
                                    <td>{{$ja->leveljabatan->level_jabatan}}</td>
                                    <td>{{$ja->direktorat->nama_direktorat}}</td>
                                    <td class="text-center">{{$ja->devisidepartement->kode_departemen}}</td>
                                    <td class="text-center">{{$ja->kode_jabatan}}</td>
                                    <td>{{$ja->jabatan}}</td>
                                    <td class="text-center">
                                        <span style="float right">     
                                            <a class="btn btn-warning btn-sm" href="/jabatan/edit-jabatan/{{$ja->id}}" type="button"><img src="{{asset('asset/edit1.png')}}"/></a>
                                            <a class="btn btn-danger btn-sm text-white" href="/jabatan/delete-jabatan/{{$ja->id}}" role="button"><img src="{{asset('asset/delete.png')}}"/></a>
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