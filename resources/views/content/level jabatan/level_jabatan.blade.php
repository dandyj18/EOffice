@extends('template.index')

@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Data</a></li>
            <li class="breadcrumb-item active"><a href="{{route('level')}}">Level Jabatan</a></li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Level Jabatan</h4>
                        <a class="btn btn-primary btn-sm" href="{{route('form_level')}}" role="button">+ Data</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Level Jabatan</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0; ?>

                                @foreach($level as $l)

                                <?php 
                                $no++;
                                ?>
                                <tr class="text-black">
                                    <td class="text-center">{{ $no }}.</td>
                                    <td>{{$l->level_jabatan}}</td>
                                    <td class="text-center">
                                        <span style="float right">     
                                            <a class="btn btn-warning btn-sm" href="/level-jabatan/edit-level-jabatan/{{$l->id}}" type="button"><img src="{{asset('asset/edit1.png')}}"/></a>
                                            <a class="btn btn-danger btn-sm text-white" href="/level-jabatan/delete-level-jabatan/{{$l->id}}" role="button"><img src="{{asset('asset/delete.png')}}"/></a>
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