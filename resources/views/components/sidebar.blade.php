<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="{{ route('dashboard') }}" class="logo">
                <img src="{{ asset('img/kaiadmin/logo_light.svg') }}" alt="navbar brand" class="navbar-brand"
                    height="20" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                
                {{-- Dashboard --}}
                <li class="nav-item active">
                    <a href="#dashboard" class="">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Opciones</h4>
                </li>

                {{-- Usuarios --}}
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#base">
                        <i class="fas fa-users"></i>
                        <p>Usuarios</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('register') }}">
                                    <span class="sub-item">Nuevo Usuario</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/buttons.html">
                                    <span class="sub-item">Lista Usuarios</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- Roles y Permisos --}}
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarLayouts">
                        <i class="fas fa-user-shield"></i>
                        <p>Roles y Permisos</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('roles_permisos.create') }}">
                                    <span class="sub-item">Crear</span>
                                </a>
                            </li>
                            <li>
                                <a href="icon-menu.html">
                                    <span class="sub-item">Icon Menu</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- Universidad --}}
                <li class="nav-item">
                    <a href="{{ route('universidad.create') }}">
                        <i class="fas fa-graduation-cap"></i>
                        <p>Universidad</p>
                    </a>
                </li>

                {{-- PNF --}}
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#tables">
                        <i class="fas fa-book-open"></i>
                        <p>PNF</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="tables">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="tables/tables.html">
                                    <span class="sub-item">Basic Table</span>
                                </a>
                            </li>
                            <li>
                                <a href="tables/datatables.html">
                                    <span class="sub-item">Datatables</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- Sede --}}
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#maps">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Sede</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="maps">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="maps/googlemaps.html">
                                    <span class="sub-item">Google Maps</span>
                                </a>
                            </li>
                            <li>
                                <a href="maps/jsvectormap.html">
                                    <span class="sub-item">Jsvectormap</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- Lapso Academico --}}
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#charts">
                        <i class="fas fa-calendar-alt"></i>
                        <p>Lapso Académico</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="charts">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="charts/charts.html">
                                    <span class="sub-item">Chart Js</span>
                                </a>
                            </li>
                            <li>
                                <a href="charts/sparkline.html">
                                    <span class="sub-item">Sparkline</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- Tipo Matricula --}}
                <li class="nav-item">
                    <a href="#">
                        <i class="fas fa-clipboard-list"></i>
                        <p>Tipo Matricula</p>
                    </a>
                </li>

                {{-- Secciones --}}
                <li class="nav-item">
                    <a href="#">
                        <i class="fas fa-layer-group"></i>
                        <p>Secciones</p>
                    </a>
                </li>

                {{-- Aulas --}}
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#submenu">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <p>Aulas</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="submenu">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="#">
                                    <span class="sub-item">Level 1</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- Laboratorios --}}
                <li class="nav-item">
                    <a href="#">
                        <i class="fas fa-desktop"></i>
                        <p>Laboratorios</p>
                    </a>
                </li>

                {{-- Bloques de horas --}}
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#Bhoras">
                        <i class="fas fa-stopwatch"></i>
                        <p>Bloques de horas</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="Bhoras">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="#">
                                    <span class="sub-item">Level 1</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- Malla del PNF --}}
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#MPNF">
                        <i class="fas fa-project-diagram"></i>
                        <p>Malla del PNF</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="MPNF">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="#">
                                    <span class="sub-item">Level 1</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- Personas --}}
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#persona">
                        <i class="fas fa-person"></i>
                        <p>Persona</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="persona">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="#">
                                    <span class="sub-item">Level 1</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- Coordinador Municipal --}}
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#CM">
                        <i class="fas fa-user-tie"></i>
                        <p>Coordinador Municipal</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="CM">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="#">
                                    <span class="sub-item">Level 1</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- Asistentes Administrativo --}}
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#asistenteA">
                        <i class="fas fa-clipboard-check"></i>
                        <p>Asistentes Administrativo</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="asistenteA">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="#">
                                    <span class="sub-item">Level 1</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- Voceros y Suplentes --}}
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#voceros">
                        <i class="fas fa-bullhorn"></i>
                        <p>Voceros y Suplentes</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="voceros">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="#">
                                    <span class="sub-item">Level 1</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- Estadísticas de Instrucción --}}
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#estadisticasI">
                        <i class="fas fa-chart-line"></i>
                        <p>Estadísticas de Instrucción</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="estadisticasI">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="#">
                                    <span class="sub-item">Level 1</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- Estadística de General --}}
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#estadisticasG">
                        <i class="fas fa-chart-bar"></i>
                        <p>Estadística de General</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="estadisticasG">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="#">
                                    <span class="sub-item">Level 1</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
