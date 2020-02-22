@extends('layout.default')

@section('titulo')
Cotizaciones | Admin AEPSA Riviera
@stop

@section('contenido')
<div class="container-fluid file_manager">
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
                    <h2>Lista individual de cotizaciones <small>Basic example without any additional modification classes</small></h2>
                    <br>
                    <h2>ID: 4</h2>
                    <h2>Nombre: tercero-test</h2>
                    <br>
                    <a href="{{ route('cotizaciones.nueva', $id) }}" class="btn btn-primary">Nueva cotizacion</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row clearfix">
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="file">
                            <a href="javascript:void(0);">
                                <div class="hover">
                                    <button type="button" class="btn btn-icon btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-file text-info"></i>
                                </div>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">Document_2017.doc</p>
                                    <small>Size: 42KB <span class="date text-muted">Nov 02, 2017</span></small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>                
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="file">
                            <a href="javascript:void(0);">
                                <div class="hover">
                                    <button type="button" class="btn btn-icon btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-file text-info"></i>
                                </div>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">Document_2017.doc</p>
                                    <small>Size: 89KB <span class="date text-muted">Dec 15, 2017</span></small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>                
                
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="file">
                            <a href="javascript:void(0);">
                                <div class="hover">
                                    <button type="button" class="btn btn-icon btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-bar-chart text-warning"></i>
                                </div>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">Report2016.xls</p>
                                    <small>Size: 68KB <span class="date text-muted">Dec 12, 2016</span></small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="file">
                            <a href="javascript:void(0);">
                                <div class="hover">
                                    <button type="button" class="btn btn-icon btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-file text-success"></i>
                                </div>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">asdf  hhkj.pdf</p>
                                    <small>Size: 3MB <span class="date text-muted">Aug 18, 2017</span></small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="file">
                            <a href="javascript:void(0);">
                                <div class="hover">
                                    <button type="button" class="btn btn-icon btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-file text-success"></i>
                                </div>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">asdf  hhkj.pdf</p>
                                    <small>Size: 3MB <span class="date text-muted">Aug 18, 2017</span></small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="file">
                            <a href="javascript:void(0);">
                                <div class="hover">
                                    <button type="button" class="btn btn-icon btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-file text-success"></i>
                                </div>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">asdf  hhkj.pdf</p>
                                    <small>Size: 3MB <span class="date text-muted">Aug 18, 2017</span></small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="file">
                            <a href="javascript:void(0);">
                                <div class="hover">
                                    <button type="button" class="btn btn-icon btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-file text-success"></i>
                                </div>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">asdf  hhkj.pdf</p>
                                    <small>Size: 3MB <span class="date text-muted">Aug 18, 2017</span></small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                
                
            </div>
</div>
@stop
