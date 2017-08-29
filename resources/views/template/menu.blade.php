<!-- BEGIN MENUBAR-->
<div id="menubar" class="menubar-inverse ">
    <div class="menubar-fixed-panel ">
        <div>
            <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        {{--<div class="expanded">
            <a href="{{ route('public.index') }}">
                <span class="text-lg text-bold text-primary">Gerontología y Geriatría</span>
            </a>
        </div>--}}
    </div>
    <div class="menubar-scroll-panel">

        <!-- BEGIN MAIN MENU -->
        <ul id="main-menu" class="gui-controls">

            <!-- BEGIN GROUP INFORMATION -->
            <li class="gui-folder">
                <a>
                    <div class="gui-icon"><i class="md md-home"></i></div>
                    <span class="title">Información del grupo</span>
                </a>
                <!--start submenu -->
                <ul>
                    <li><a href="{{ route('public.index') }}" ><span class="title">Inicio</span></a></li>
                    <li><a href="{{ route('public.about') }}" ><span class="title">¿Quiénes somos?</span></a></li>
                    <li><a href="{{ route('public.teaching') }}" ><span class="title">Docencia</span></a></li>
                    <li><a href="{{ route('public.research') }}" ><span class="title">Investigación</span></a></li>
                    <li><a href="{{ route('public.extension') }}" ><span class="title">Proyección (Extensión)</span></a></li>
                    <li><a href="{{ route('public.projects') }}" ><span class="title">Proyectos internacionales</span></a></li>
                    <li><a href="{{ route('public.publications') }}" ><span class="title">Publicaciones científicas</span></a></li>
                    <li><a href="{{ route('public.community') }}" ><span class="title">Comunidades</span></a></li>
                    <li><a href="{{ route('public.events') }}" ><span class="title">Eventos</span></a></li>
                </ul><!--end /submenu -->
            </li><!--end /menu-li -->
            <!-- END GROUP INFORMATION -->
        @if(! Auth::guest())
            <!-- BEGIN EMAIL -->
            @if( Auth::user()->role->type != 'invited')
            <li class="gui-folder">
                <a>
                    <div class="gui-icon"><i class="md md-vpn-key"></i></div>
                    <span class="title">Administrador</span>
                </a>
                <!--start submenu -->

                <ul>
                    <li><a href="{{ route('admin.rol.index') }}" ><span class="title">Rol</span></a></li>
                    <li><a href="{{ route('admin.permission.index') }}" ><span class="title">Permisos</span></a></li>
                    <li><a href="{{ route('admin.user.index') }}" ><span class="title">Usuarios</span></a></li>
                    <li><a href="{{ route('admin.patient.index') }}" ><span class="title">Pacientes</span></a></li>
                    <li><a href="{{ route('admin.typeDiagnosis.index') }}" ><span class="title">Tipo de Diagnóstico</span></a></li>
                    <li><a href="{{ route('admin.diagnosis.index') }}" ><span class="title">Diagnóstico</span></a></li>
                    <li><a href="{{ route('admin.level.index') }}" ><span class="title">Niveles</span></a></li>
                    <li><a href="{{ route('admin.variable.index') }}" ><span class="title">Variables</span></a></li>
                    <li><a href="{{ route('admin.criterion.index') }}" ><span class="title">Asignar Criterio</span></a></li>
                    <li><a href="{{ route('admin.variablePatient.index') }}" ><span class="title">Asignar Variable</span></a></li>
                    <li><a href="{{ route('admin.patientLevel.index') }}" ><span class="title">Asignar Nivel</span></a></li>

                </ul><!--end /submenu -->
            </li><!--end /menu-li -->
            @endif
        @endif
            <!-- END EMAIL -->

        </ul><!--end .main-menu -->
        <!-- END MAIN MENU -->

    </div><!--end .menubar-scroll-panel-->
</div><!--end #menubar-->
<!-- END MENUBAR -->