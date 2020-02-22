@extends('layout.default')

@section('titulo')
Obras | Admin AEPSA Riviera
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
                    <h2>Gasto individual de la Obra<small>Basic example without any additional modification classes</small></h2>
                    <br>
                    <h2>ID cotizacion: 5</h2>
                    <h2>ID cliente: 1042</h2>
                    <h2>Nombre: juan perez</h2>
                    <h2>Descripcion: espuma de poliuretano 1" en lamina para una nave</h2>
                    <br>
                    <!-- <a href="#" class="btn btn-primary">Nuevo cliente</a> -->
                    <a href="#" class="btn btn-info">Detalle de obra</a>
                    <a href="#" class="btn btn-info">Gastos de obra</a>
                    <a href="#" class="btn btn-info">Personal asignado</a>
                    <a href="#" class="btn btn-info">Materia prima</a>
                    <a href="#" class="btn btn-info">Herramientas</a>
                    <a href="#" class="btn btn-info">Vehiculos</a>
                    <br><br>
                    <a href="#" class="btn btn-primary">Nuevo gasto de obra</a>
                </div>
               
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Descripcion</th>
                                    <th>Monto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2020-03-24</td>
                                    <td>Se completaron 150 mts2 de poliurea</td>
                                    <td>
                                        <div class="row clearfix file_manager">
                                            <div class="col-lg-3 col-md-4 col-sm-12">
                                                <div class="card">
                                                    <div class="file">
                                                        <a href="javascript:void(0);">
                                                            <div class="hover">
                                                                <button type="button" class="btn btn-icon btn-danger">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>
                                                            </div>
                                                            <div class="image">
                                                                <img src="{{ asset('assets/images/image-gallery/5.jpg') }}" alt="img" class="img-fluid">
                                                            </div>
                                                            <div class="file-name">
                                                                <p class="m-b-5 text-muted">img21545ds.jpg</p>
                                                                <small>Size: 2MB <span class="date text-muted">Dec 11, 2017</span></small>
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
                                                            <div class="image">
                                                                <img src="{{ asset('assets/images/image-gallery/5.jpg') }}" alt="img" class="img-fluid">
                                                            </div>
                                                            <div class="file-name">
                                                                <p class="m-b-5 text-muted">img21545ds.jpg</p>
                                                                <small>Size: 2MB <span class="date text-muted">Dec 11, 2017</span></small>
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
                                                            <div class="image">
                                                                <img src="{{ asset('assets/images/image-gallery/5.jpg') }}" alt="img" class="img-fluid">
                                                            </div>
                                                            <div class="file-name">
                                                                <p class="m-b-5 text-muted">img21545ds.jpg</p>
                                                                <small>Size: 2MB <span class="date text-muted">Dec 11, 2017</span></small>
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
                                                            <div class="image">
                                                                <img src="{{ asset('assets/images/image-gallery/5.jpg') }}" alt="img" class="img-fluid">
                                                            </div>
                                                            <div class="file-name">
                                                                <p class="m-b-5 text-muted">img21545ds.jpg</p>
                                                                <small>Size: 2MB <span class="date text-muted">Dec 11, 2017</span></small>
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
                                                            <div class="image">
                                                                <img src="{{ asset('assets/images/image-gallery/5.jpg') }}" alt="img" class="img-fluid">
                                                            </div>
                                                            <div class="file-name">
                                                                <p class="m-b-5 text-muted">img21545ds.jpg</p>
                                                                <small>Size: 2MB <span class="date text-muted">Dec 11, 2017</span></small>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2020-03-24</td>
                                    <td>Se completaron 150 mts2 de poliurea</td>
                                    <td>
                                        <div class="row clearfix file_manager">
                                            <div class="col-lg-3 col-md-4 col-sm-12">
                                                <div class="card">
                                                    <div class="file">
                                                        <a href="javascript:void(0);">
                                                            <div class="hover">
                                                                <button type="button" class="btn btn-icon btn-danger">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>
                                                            </div>
                                                            <div class="image">
                                                                <img src="{{ asset('assets/images/image-gallery/5.jpg') }}" alt="img" class="img-fluid">
                                                            </div>
                                                            <div class="file-name">
                                                                <p class="m-b-5 text-muted">img21545ds.jpg</p>
                                                                <small>Size: 2MB <span class="date text-muted">Dec 11, 2017</span></small>
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
                                                            <div class="image">
                                                                <img src="{{ asset('assets/images/image-gallery/5.jpg') }}" alt="img" class="img-fluid">
                                                            </div>
                                                            <div class="file-name">
                                                                <p class="m-b-5 text-muted">img21545ds.jpg</p>
                                                                <small>Size: 2MB <span class="date text-muted">Dec 11, 2017</span></small>
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
                                                            <div class="image">
                                                                <img src="{{ asset('assets/images/image-gallery/5.jpg') }}" alt="img" class="img-fluid">
                                                            </div>
                                                            <div class="file-name">
                                                                <p class="m-b-5 text-muted">img21545ds.jpg</p>
                                                                <small>Size: 2MB <span class="date text-muted">Dec 11, 2017</span></small>
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
                                                            <div class="image">
                                                                <img src="{{ asset('assets/images/image-gallery/5.jpg') }}" alt="img" class="img-fluid">
                                                            </div>
                                                            <div class="file-name">
                                                                <p class="m-b-5 text-muted">img21545ds.jpg</p>
                                                                <small>Size: 2MB <span class="date text-muted">Dec 11, 2017</span></small>
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
                                                            <div class="image">
                                                                <img src="{{ asset('assets/images/image-gallery/5.jpg') }}" alt="img" class="img-fluid">
                                                            </div>
                                                            <div class="file-name">
                                                                <p class="m-b-5 text-muted">img21545ds.jpg</p>
                                                                <small>Size: 2MB <span class="date text-muted">Dec 11, 2017</span></small>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2020-03-24</td>
                                    <td>Se completaron 150 mts2 de poliurea</td>
                                    <td>
                                        <div class="row clearfix file_manager">
                                            <div class="col-lg-3 col-md-4 col-sm-12">
                                                <div class="card">
                                                    <div class="file">
                                                        <a href="javascript:void(0);">
                                                            <div class="hover">
                                                                <button type="button" class="btn btn-icon btn-danger">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>
                                                            </div>
                                                            <div class="image">
                                                                <img src="{{ asset('assets/images/image-gallery/5.jpg') }}" alt="img" class="img-fluid">
                                                            </div>
                                                            <div class="file-name">
                                                                <p class="m-b-5 text-muted">img21545ds.jpg</p>
                                                                <small>Size: 2MB <span class="date text-muted">Dec 11, 2017</span></small>
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
                                                            <div class="image">
                                                                <img src="{{ asset('assets/images/image-gallery/5.jpg') }}" alt="img" class="img-fluid">
                                                            </div>
                                                            <div class="file-name">
                                                                <p class="m-b-5 text-muted">img21545ds.jpg</p>
                                                                <small>Size: 2MB <span class="date text-muted">Dec 11, 2017</span></small>
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
                                                            <div class="image">
                                                                <img src="{{ asset('assets/images/image-gallery/5.jpg') }}" alt="img" class="img-fluid">
                                                            </div>
                                                            <div class="file-name">
                                                                <p class="m-b-5 text-muted">img21545ds.jpg</p>
                                                                <small>Size: 2MB <span class="date text-muted">Dec 11, 2017</span></small>
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
                                                            <div class="image">
                                                                <img src="{{ asset('assets/images/image-gallery/5.jpg') }}" alt="img" class="img-fluid">
                                                            </div>
                                                            <div class="file-name">
                                                                <p class="m-b-5 text-muted">img21545ds.jpg</p>
                                                                <small>Size: 2MB <span class="date text-muted">Dec 11, 2017</span></small>
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
                                                            <div class="image">
                                                                <img src="{{ asset('assets/images/image-gallery/5.jpg') }}" alt="img" class="img-fluid">
                                                            </div>
                                                            <div class="file-name">
                                                                <p class="m-b-5 text-muted">img21545ds.jpg</p>
                                                                <small>Size: 2MB <span class="date text-muted">Dec 11, 2017</span></small>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2020-03-24</td>
                                    <td>Se completaron 150 mts2 de poliurea</td>
                                    <td>
                                        <div class="row clearfix file_manager">
                                            <div class="col-lg-3 col-md-4 col-sm-12">
                                                <div class="card">
                                                    <div class="file">
                                                        <a href="javascript:void(0);">
                                                            <div class="hover">
                                                                <button type="button" class="btn btn-icon btn-danger">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>
                                                            </div>
                                                            <div class="image">
                                                                <img src="{{ asset('assets/images/image-gallery/5.jpg') }}" alt="img" class="img-fluid">
                                                            </div>
                                                            <div class="file-name">
                                                                <p class="m-b-5 text-muted">img21545ds.jpg</p>
                                                                <small>Size: 2MB <span class="date text-muted">Dec 11, 2017</span></small>
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
                                                            <div class="image">
                                                                <img src="{{ asset('assets/images/image-gallery/5.jpg') }}" alt="img" class="img-fluid">
                                                            </div>
                                                            <div class="file-name">
                                                                <p class="m-b-5 text-muted">img21545ds.jpg</p>
                                                                <small>Size: 2MB <span class="date text-muted">Dec 11, 2017</span></small>
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
                                                            <div class="image">
                                                                <img src="{{ asset('assets/images/image-gallery/5.jpg') }}" alt="img" class="img-fluid">
                                                            </div>
                                                            <div class="file-name">
                                                                <p class="m-b-5 text-muted">img21545ds.jpg</p>
                                                                <small>Size: 2MB <span class="date text-muted">Dec 11, 2017</span></small>
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
                                                            <div class="image">
                                                                <img src="{{ asset('assets/images/image-gallery/5.jpg') }}" alt="img" class="img-fluid">
                                                            </div>
                                                            <div class="file-name">
                                                                <p class="m-b-5 text-muted">img21545ds.jpg</p>
                                                                <small>Size: 2MB <span class="date text-muted">Dec 11, 2017</span></small>
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
                                                            <div class="image">
                                                                <img src="{{ asset('assets/images/image-gallery/5.jpg') }}" alt="img" class="img-fluid">
                                                            </div>
                                                            <div class="file-name">
                                                                <p class="m-b-5 text-muted">img21545ds.jpg</p>
                                                                <small>Size: 2MB <span class="date text-muted">Dec 11, 2017</span></small>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
