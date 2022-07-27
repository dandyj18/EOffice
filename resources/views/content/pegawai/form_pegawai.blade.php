@extends('template.index')

@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Data</li>
            <li class="breadcrumb-item"><a href="{{route('admin.pegawai')}}">Pegawai</a></li>
            <li class="breadcrumb-item active"><a href="">Insert Pegawai</a></li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-center"><h3>Pegawai</h3></div>
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        {{ $error }} <br/>
                        @endforeach
                    </div>
                    @endif
                    <center>
                    <div class="basic-form">
                        <form action="{{route('admin.insert_pegawai')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group col-md-8">
                                    <div class="mb-3">
                                        <input type="text" class="form-control input-Default" name="nik" required="required" placeholder="NIK">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control input-Default" name="no_ktp" required="required" placeholder="Nomor KTP">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control input-Default" name="nama_pegawai" id="nama_pegawai" required="required" placeholder="Nama">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control input-Default" name="npwp" required="required" placeholder="NPWP">
                                    </div>
                                    <div class="mb-3">
                                        <select class="custom-select mr-sm-2" name="leveljabatan_id" required="required" aria-label="Default select example">
                                            <option disabled selected>Pilih Level Jabatan</option>

                                            @foreach($level as $l)
                                                <option value="{{ $l->id }}">{{ $l->level_jabatan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <select class="custom-select mr-sm-2" name="direktorat_id" id="direktorat_id" required="required" aria-label="Default select example">
                                            <option disabled selected>Pilih Direktorat</option>

                                            @foreach($dir as $key => $value)
                                                <option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="devisi-form mb-3">
                                        <select class="custom-select mr-sm-2" name="devisi_id" id="devisi_id" aria-label="Default select example">
                                            <option disabled selected>Pilih Devisi</option>
                                        </select>
                                    </div>
                                    <div class="departemen-form mb-3">
                                        <select class="custom-select mr-sm-2" name="departemen_id" id="departemen_id" aria-label="Default select example">
                                            <option disabled selected>Pilih Departemen</option>
                                        </select>
                                    </div>
                                    <div class="seksi-form mb-3">
                                        <select class="custom-select mr-sm-2" name="seksi_id" id="seksi_id" aria-label="Default select example">
                                            <option disabled selected>Pilih Seksi</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <span>
                                            <input class="btn btn-primary" type="submit" value="Submit" onClick="return confirm('Apakah data yang dimasukkan sudah benar ?')">
                                            <a class="btn btn-success text-white" href="{{route('admin.pegawai')}}" role="button">Kembali</a>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#direktorat_id').on('change',function(){
             var dirID = $(this).val();
             if(dirID){
                $.ajax({
                     url : 'pegawai/getdevisi/'+dirID,
                     type : "GET",
                     dataType : "json",
                     success: function(data){
                        console.log(data);
                        if(data){
                        $('#devisi_id').empty();
                        $('#devisi_id').append('<option></option>');
                        $.each(data, function(key, value){
                            $('#devisi_id').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                        }else{
                            $('#devisi_id').empty();
                        }
                    }
                });
            }else{
                $('#devisi_id').empty();
                $('#departemen_id').empty();
                $('#seksi_id').empty();
            }
         });
        $('#devisi_id').on('change',function(){
             var devisiID = $(this).val();
             if(devisiID){
                 $.ajax({
                    url : 'pegawai/getdepartemen/'+devisiID,
                    type : "GET",
                    dataType : "json",
                    success: function(datadevisi){
                        console.log(datadevisi);
                        if(datadevisi){
                        $('#departemen_id').empty();
                        $('#departemen_id').append('<option></option>');
                        $.each(datadevisi, function(key, value){
                            $('#departemen_id').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                        }else{
                            $('#departemen_id').empty();
                        }
                    }
                 });
            }else{
                 $('#departemen_id').empty();
                 $('#seksi_id').empty();
            }
         });

        $('#departemen_id').on('change',function(){
             var departemenID = $(this).val();
             if(departemenID){
                 $.ajax({
                    url : 'pegawai/getseksi/'+departemenID,
                    type : "GET",
                    dataType : "json",
                    success: function(datade){
                        console.log(datade);
                        if(datade){
                        $('#seksi_id').empty();
                        $('#seksi_id').append('<option></option>');
                        $.each(datade, function(key, value){
                            $('#seksi_id').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                        }else{
                            $('#seksi_id').empty();
                        }
                    }
                 });
            }else{
                 $('#seksi_id').empty();
            }
         });
    });

$(function(){
    var hidestuff = function(){
        $(".devisi-form").hide();
        $(".departemen-form").hide();
        $(".seksi-form").hide();
    }
    
    $("select[name='leveljabatan_id']").change(function(){
        hidestuff();
        
        var value = $(this).val();
        if(value == "2"){
            $(".devisi-form").show();
        }
        if(value == "3"){
            $(".devisi-form").show();
            $(".departemen-form").show();
        }
        if(value == "4"){
            $(".devisi-form").show();
            $(".departemen-form").show();
            $(".seksi-form").show();
        }
    });
    hidestuff();
});

 </script>
@endsection