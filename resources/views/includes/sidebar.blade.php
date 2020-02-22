<div id="left-sidebar" class="sidebar">
        <div class="sidebar-scroll">
            <div class="user-account">
                <img src="{{ asset('assets/images/user.png') }}" class="rounded-circle user-photo" alt="User Profile Picture">
                <div class="dropdown">
                    <span>Bienvenido,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>{{ Auth::user()->name }}</strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account">
                        <li><a href="page-profile2.html"><i class="icon-user"></i>Mi perfil</a></li>
                        <li><a href="javascript:void(0);"><i class="icon-settings"></i>Ajustes</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <i class="icon-power"></i>Cerrar Sesión
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                <hr>
                <ul class="row list-unstyled">
                    <li class="col-4">
                        <small>Clientes</small>
                        <h6>25839</h6>
                    </li>
                    <li class="col-4">
                        <small>Obras</small>
                        <h6>850</h6>
                    </li>
                    <li class="col-4">
                        <small>Cotizaciones</small>
                        <h6>13500</h6>
                    </li>
                </ul>
            </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li>
            </ul>
                
            <!-- Tab panes -->
            <div class="tab-content p-l-0 p-r-0">
                <div class="tab-pane active" id="menu">
                    <nav id="left-sidebar-nav" class="sidebar-nav">
                        <ul id="main-menu" class="metismenu">
                            <li><a href="{{route('clientes.clientes')}}"><i class="icon-user"></i> <span>Clientes</span></a></li>
                            <li><a href="{{route('clientes.seguimiento')}}"><i class="icon-users"></i> <span>Seguimientos clientes</span></a></li>
                            <li><a href="{{ route('cotizaciones.cotizaciones') }}"><i class="icon-calculator"></i> <span>Cotizaciones</span></a></li>
                            
                            <li><a href="{{ asset('/cotizacionesCompletas') }}"><i class="icon-calculator"></i> <span>Cotizaciones</span></a></li>
                            <li><a href="#Dashboard"><i class="fa fa-legal"></i> <span>Obras</span></a></li>
                            <li><a href="#Dashboard"><i class="fa fa-money"></i> <span>Gastos</span></a></li>
                            <li><a href="#Dashboard"><i class="fa fa-users"></i> <span>Personal</span></a></li>
                            <li><a href="#Dashboard"><i class="fa fa-truck"></i> <span>Vehiculos</span></a></li>
                            <li><a href="#Dashboard"><i class="fa fa-cubes"></i> <span>Proveedores</span></a></li>
                            <li>
                                <a href="#Dashboard" class="has-arrow"><i class="fa fa-sitemap"></i> <span>Inventario</span></a>
                                <ul>
                                    <li><a href="index.html"><i class="fa fa-sitemap"></i> Lista general</a></li>
                                    <li><a href="index.html"><i class="fa fa-wrench"></i> Herramientas</a></li>
                                    <li><a href="index.html"><i class="fa fa-database"></i> Materia prima</a></li>
                                </ul>
                            </li>
                            <li><a href="#Dashboard"><i class="fa fa-book"></i> <span>Documentacion</span></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane p-l-15 p-r-15" id="setting">
                    <h6>Choose Skin</h6>
                    <ul class="choose-skin list-unstyled">
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>                   
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="cyan" class="active">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="blush">
                            <div class="blush"></div>
                            <span>Blush</span>
                        </li>
                    </ul>
                    <hr>
                    <h6>General Settings</h6>
                    <ul class="setting-list list-unstyled">
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Report Panel Usag</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox" checked>
                                <span>Email Redirect</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox" checked>
                                <span>Notifications</span>
                            </label>                      
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Auto Updates</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Offline</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Location Permission</span>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>          
        </div>
    </div>