<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index.html" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="POS Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Mi POS</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- User Info -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- Search -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Buscar..." aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <!-- Dashboard -->
        <li class="nav-item">
          <a href="dashboard.html" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Tablero</p>
          </a>
        </li>

        <!-- Inventario -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-warehouse"></i>
            <p>Inventario <i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview pl-3">
            <li class="nav-item">
              <a href="articulos.html" class="nav-link">
                <i class="fas fa-box nav-icon text-info"></i>
                <div class="ml-2 d-flex flex-column justify-content-center">
                  <span class="font-weight-normal">Artículos</span>
                  <small class="text-muted d-block">Gestiona el stock disponible</small>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a href="categorias.html" class="nav-link">
                <i class="fas fa-tags nav-icon text-success"></i>
                <div class="ml-2 d-flex flex-column justify-content-center">
                  <span class="font-weight-normal">Categorías</span>
                  <small class="text-muted d-block">Clasifica los productos</small>
                </div>
              </a>
            </li>
          </ul>
        </li>

        <!-- Compras -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-shopping-cart"></i>
            <p>Compras <i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview pl-3">
            <li class="nav-item">
              <a href="ingresos.html" class="nav-link">
                <i class="fas fa-file-invoice-dollar nav-icon text-primary"></i>
                <div class="ml-2 d-flex flex-column justify-content-center">
                  <span class="font-weight-normal">Registrar Compra</span>
                  <small class="text-muted d-block">Añadir compras al sistema</small>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a href="proveedores.html" class="nav-link">
                <i class="fas fa-truck-loading nav-icon text-success"></i>
                <div class="ml-2 d-flex flex-column justify-content-center">
                  <span class="font-weight-normal">Proveedores</span>
                  <small class="text-muted d-block">Gestión de proveedores</small>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a href="consultar-compras.html" class="nav-link">
                <i class="fas fa-clipboard-list nav-icon text-warning"></i>
                <div class="ml-2 d-flex flex-column justify-content-center">
                  <span class="font-weight-normal">Historial de Compras</span>
                  <small class="text-muted d-block">Ver compras realizadas</small>
                </div>
              </a>
            </li>
          </ul>
        </li>

        <!-- Ventas -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cash-register"></i>
            <p>Ventas <i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview pl-3">
            <li class="nav-item">
              <a href="ventas.html" class="nav-link">
                <i class="fas fa-receipt nav-icon text-primary"></i>
                <div class="ml-2 d-flex flex-column justify-content-center">
                  <span class="font-weight-normal">Registrar Venta</span>
                  <small class="text-muted d-block">Realizar una nueva venta</small>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a href="clientes.html" class="nav-link">
                <i class="fas fa-users nav-icon text-success"></i>
                <div class="ml-2 d-flex flex-column justify-content-center">
                  <span class="font-weight-normal">Clientes</span>
                  <small class="text-muted d-block">Administrar tus clientes</small>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a href="consultar-ventas.html" class="nav-link">
                <i class="fas fa-history nav-icon text-warning"></i>
                <div class="ml-2 d-flex flex-column justify-content-center">
                  <span class="font-weight-normal">Historial de Ventas</span>
                  <small class="text-muted d-block">Revisar ventas anteriores</small>
                </div>
              </a>
            </li>
          </ul>
        </li>

        <!-- Usuarios y Permisos -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-shield"></i>
            <p>Usuarios & Permisos <i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview pl-3">
            <li class="nav-item">
              <a href="usuarios.html" class="nav-link">
                <i class="fas fa-user nav-icon text-info"></i>
                <div class="ml-2 d-flex flex-column justify-content-center">
                  <span class="font-weight-normal">Usuarios</span>
                  <small class="text-muted d-block">Gestionar usuarios del sistema</small>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a href="permisos.html" class="nav-link">
                <i class="fas fa-key nav-icon text-danger"></i>
                <div class="ml-2 d-flex flex-column justify-content-center">
                  <span class="font-weight-normal">Permisos</span>
                  <small class="text-muted d-block">Roles y accesos</small>
                </div>
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
