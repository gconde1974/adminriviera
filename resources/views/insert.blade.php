@extends('layout.default')

@section('titulo')
insert | Admin AEPSA Riviera
@stop

@section('contenido')
<div class="container-fluid">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-8 col-sm-12">                        
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Page Blank</li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2>insertar ciudades en la BD <small>modulo para cargar archivo json de las ciudades.</small></h2>
                    <br>
                </div>
               
                <div class="body">
                    <div class="table-responsive">
                        <input id="archivo" name="archivo" type="file" />
                    </div>
                    <br>
                    <a href="javascript:void(0);" class="insert btn btn-primary">Insertar</a>

                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('scripts')
<script>
    $(document).ready(function() {
    $('.insert').on('click', function(){
        let file = $('#archivo')[0].files[0]
        let fd = new FormData();
        fd.append('theFile', file);
        $.ajax({
            method: "POST",
            url: "{{route('catalogos.insertcities')}}",
            contentType: false,
            processData: false,
            data:fd
        })
        .done(function(data) {
            alert(data.mensaje);
        });
    })
});
</script>
@endsection