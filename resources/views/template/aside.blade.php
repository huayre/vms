<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('template/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('template/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-compact text-sm nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Administración
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Usuarios
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('roles')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Roles</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('usuarios')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Usuarios</p>
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a href="{{route('permisos_terminal')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Permisos Terminal</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('permisos_menu')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Permisos Menu</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Manteción de Maestros
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('articulos')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Mant. de Artículos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('cod_barra')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Mant. de Códigos de Barra</p>
                                    </a>


                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Porteria
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('entrada_salida')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Control de Entrada y Salida</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('mantencion_transporte')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mantención de Transporte</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('crear_transportista')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ingresar Transportista</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('impri_document_transporte')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Imprimir Documento Transporte</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Consultas
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('movimiento_vehiculo')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Moviento de Vehículos</p>
                                    </a>
                                </li>

                            </ul>
                        </li>


                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Recepción
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('mantencion_documento')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mantención de Documentos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('modifica_recepcionado')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Modificar Recepcionado</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('hoja_trabajo')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Hoja de Trabajo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Consultas
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('carga_transporte')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Carga de transporte</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Descarga de Transporte</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Estado de Waybills</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Informes
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./index.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Diferencia en Transporte</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Diferencia Ingreso & Recepción</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Estado en Transito</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Almacenamiento
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('almacenamiento.ubicaciones')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Admin. de ubicación</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('almacenamiento.mapa')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mapa De Ubicaciones</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Consultas
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('almacenamiento.stock_articulo')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Stock de Artículos Almacenados</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('almacenamiento.stock_general')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Stock General</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('almacenamiento.ubicaciones_disponibles')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ubicaciones Disponibles</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('almacenamiento.ubicaciones_usadas')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ubicaciones Usadas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('almacenamiento.ubicaciones_articulos')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ubicaciones por Artículo</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Informes
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('almacenamiento.ctac_articulo')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cta. cte. Artículo</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('almacenamiento.ctac_ubicaciones')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cta. cte Ubicaciones</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('almacenamiento.ctac_cliente')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cta. cte. Cliente</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('almacenamiento.movimiento_mensual')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Movimiento Mensual Unidades</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Inventario
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('inventario.toma_inventario')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Crea Toma de Inventario</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('inventario.toma_inventario')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Actualiza toma de Inventario</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Consultas
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('inventario.consulta_ti')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Consulta Toma Inventario</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Informes
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('inventario.diferencias_ti')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Diferencia de Ubicación</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('inventario.xtek_mims')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>xTek v/s MIMS</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Despachos
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('despacho.pedido')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mantención Pedidos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('despacho.asignacion')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Asignar Operador</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('despacho.preparacion')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Estado de Preparación</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('despacho.entrega_ventana')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Entrega en Ventana</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('despacho.no_catalogados')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Entrega no Catalogados</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Consultas
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('despacho.picking')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Estado de Picking</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pedidos Preparados</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Informes
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('despacho.entrega_ventana')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Entrega en Ventana</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('despacho.conciliacion_despacho')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Concilianción de Despacho</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('despacho.reingreso_articulos')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Reingreso de Artículos</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Etiquetas
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('tag.usuarios')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Usuarios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('tag.ubicaciones')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ubicaciones</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('tag.bultos')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bultos</p>
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
