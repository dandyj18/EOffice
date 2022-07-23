@extends('template.index')

@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a >Data</a></li>
            <li class="breadcrumb-item"><a href="{{route('jabatan')}}">Jabatan</a></li>
            <li class="breadcrumb-item active"><a href="{{route('insert_jabatan')}}">Insert Jabatan</a></li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-center"><h3>Jabatan</h3></div>
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        {{ $error }} <br/>
                        @endforeach
                    </div>
                    @endif
                    <center>
                    <div class="basic-form">
                        <form action="{{route('insert_jabatan')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group col-md-8">
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
                                    <div class="departemen-form mb-3">
                                        <select class="custom-select mr-sm-2" name="devisidepartement_id" id="devisidepartement_id" required="required" aria-label="Default select example">
                                            <option disabled selected>Pilih Departemen</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control input-Default" name="kode_jabatan" required="required" placeholder="Kode Jabatan">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control input-Default" name="jabatan" required="required" placeholder="Jabatan">
                                    </div>
                                    <div class="mb-3">
                                            <span>
                                                <input class="btn btn-primary" type="submit" value="Submit" onClick="return confirm('Apakah data yang dimasukkan sudah benar ?')">
                                                <a class="btn btn-success text-white" href="{{route('jabatan')}}" role="button">Kembali</a>
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
                    url : 'jabatan/getdepartemen/' +dirID,
                    type : "GET",
                    dataType : "json",
                    success: function(data){
                        console.log(data);
                        $('#devisidepartement_id').empty();
                        $.each(data, function(key, value){
                            $('#devisidepartement_id').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                    }
                });
            }else{
                $('#devisidepartement_id').empty();
            }
        });
   });
</script>
<script>
$(function(){
    var hidestuff = function(){
        $(".departemen-form").hide();
    }
    
    $("select[name='leveljabatan_id']").change(function(){
        hidestuff();
        
        var value = $(this).val();
        if(value == "1"){
            $(".departemen-form").show();
        }
    });
    hidestuff();
});
</script>
@endsection