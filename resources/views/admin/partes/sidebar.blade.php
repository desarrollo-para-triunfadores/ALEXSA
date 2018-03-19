<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="header" align="center"></li>
            <!-- Gestión de Usuarios -->
            <li  id="side-usuarios-li"  class="treeview">
                <a href="#">
                    <i class="fa fa-group" aria-hidden="true"></i>
                    <span>Gestión de usuarios</span>
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul id="side-usuarios-ul" class="treeview-menu">
                    <li id="side-ele-usuarios"><a href="/admin/usuarios"><i class="fa fa-user-circle"></i> Usuarios</a></li>
                    <li id="side-ele-roles"><a data-toggle="tooltip" title="roles de los usuarios, util para restringir el acceso a determinadas funciones dentro del sistema" href="/admin/roles"><i class="fa fa-group"></i> Roles</a></li>

                </ul>
            </li>
            <!-- Parametros Generales -->
            <li  id="side-general-li"  class="treeview">
                <a href="#">
                    <i class="fa fa-wrench" aria-hidden="true"></i>
                    <span>Parámetros generales</span>
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul id="side-general-ul" class="treeview-menu">
                    <li id="side-ele-servicios"><a href="/admin/rubros"><i class="fa fa-check-square-o"></i> Rubros</a></li>
                    <li id="side-ele-lugares-li">
                        <a href="#"><i class="fa fa-map-marker"></i> Lugares
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul id="side-ele-lugares-ul" class="treeview-menu">
                            <li id="side-ele-lugares-paises"><a href="/admin/paises"><i class="fa fa-circle-o"></i> Países</a></li>
                            <li id="side-ele-lugares-provincias"><a href="/admin/provincias"><i class="fa fa-circle-o"></i> Provincias</a></li>
                            <li id="side-ele-lugares-localidades"><a href="/admin/localidades"><i class="fa fa-circle-o"></i> Localidades</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <!-- Articulos -->
            <li  id="side-articulos-li"  class="treeview">
                <a href="#">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span>Gestión de Artículos</span>
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul id="side-articulos-ul" class="treeview-menu">
                    <li id="side-ele-articulos"><a href="/admin/articulos"><i class="fa fa-cubes"></i> Artículos</a></li>
                    <li id="side-ele-servicios"><a href="/admin/marcas"><i class="fa fa-registered"></i> Marcas</a></li>
                    <li id="side-ele-servicios"><a href="/admin/rubros"><i class="fa fa-check-square-o"></i> Rubros</a></li>
                    <li id="side-ele-servicios"><a href="/admin/subrubros"><i class="fa fa-check-square-o"></i> Subrubros</a></li>
                </ul>
            </li>
            <!-- Gestión Presupuestos -->
            <li id="gestion-presupuestos">
            <a href="/admin/presupuestos"><i class="fa fa-check-square-o"></i> Gestión de Presupuestos</a>
              
            </li>
            <!--Backup de Datos -->
            <li id="li15">
                <a data-toggle="tooltip" data-placement="top" title="Publicar un catalogo en el sitio web comercial (seccion 'Descargas')" href="/admin/catalogos">
                    <i class="fa fa-cloud-upload">
                        <div class="icon-bg bg-orange"></div>
                    </i>
                    <span class="menu-title">Subir Catálogos</span>
                </a>
            </li>

             <!--Backup de Datos -->
            <li id="li14">
                <a data-toggle="tooltip" data-placement="top" title="Backup de la información almacenada" onclick="backup()"  href="{{--  route('admin.backup.index') --}}">
                    <i class="fa fa-database">
                        <div class="icon-bg bg-orange"></div>
                    </i>
                    <span class="menu-title">Respaldo de datos</span>
                </a>
            </li>
            
        </ul>
    </section>
</aside>


<script type="text/javascript">
    function backup(){
        var enlace_factura = 'http://localhost/backupGN/hacer_backup_ALEX.php';
        window.open(enlace_factura);
    }
</script>
