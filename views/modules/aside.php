 <!-- Main Sidebar Container -->

  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->

    <a href="views/sources/adminlte/index3.html" class="brand-link">

      <img src="views/sources/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">

      <span class="brand-text font-weight-light">AdminLTE 3</span>

    </a>


 

    <!-- Sidebar -->

    <div class="sidebar">


 

      <!-- Sidebar user (optional) -->

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="image">

          <img src="views/sources/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">

        </div>

        <div class="info">

          <a href="#" class="d-block"><?=ucwords($_SESSION['admin_nombre']) ;?></a>

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

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                  <li class="nav-item">

            <a href="/admin/Administradores" class="nav-link active" >

          <i class="nav-icon fas fa-tachometer-alt"></i>

              <p>

                Administradores
              </p>

            </a>

          </li>
        
        <li class="nav-item">

            <a href="/admin/Dashboard" class="nav-link">

          <i class="nav-icon fas fa-tachometer-alt"></i>

              <p>

                Dashboard
              </p>

            </a>

          </li>
 

          <li class="nav-item">

            <a href="/admin/Productos" class="nav-link">

              <i class="nav-icon fas fa-tachometer-alt"></i>

              <p>

                Productos

                <i class="right fas fa-angle-left"></i>

              </p>

            </a>

            <ul class="nav nav-treeview">

              <li class="nav-item">

                <a href="/admin/Categorias" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>

                  <p>Categorias</p>

                </a>

              </li>

              <li class="nav-item">

                <a href="/admin/SubCategorias" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>

                  <p>SubCategorias</p>

                </a>

              </li>

              <li class="nav-item">

                <a href="/admin/Inventario" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>

                  <p>Inventario</p>

                </a>

              </li>

              
              <li class="nav-item">

                <a href="/admin/Mensajes" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>

                  <p>Mensajes</p>

                </a>

              </li>

            </ul>

          </li>


          
          <li class="nav-item">

            <a href="/admin/Ventas" class="nav-link">

              <i class="nav-icon fas fa-tachometer-alt"></i>

              <p>

                Ventas

                <i class="right fas fa-angle-left"></i>

              </p>

            </a>

            <ul class="nav nav-treeview">

              <li class="nav-item">

                <a href="/admin/Pedidos" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>

                  <p>Pedidos</p>

                </a>

              </li>

              <li class="nav-item">

                <a href="/admin/Informes" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>

                  <p>Informes</p>

                </a>

              </li>

              <li class="nav-item">

                <a href="/admin/Disputas" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>

                  <p>Disputas</p>

                </a>

              </li>


            </ul>

          </li>


 

          <li class="nav-item">

            <a href="../widgets.html" class="nav-link">

              <i class="nav-icon fas fa-th"></i>

              <p>

                Widgets

                <span class="right badge badge-danger">New</span>

              </p>

            </a>

          </li>


 

          <li class="nav-item">

            <a href="/salir" class="nav-link bg-danger">

              <i class="nav-icon fas fa-sign-out-alt"></i>

              <p>

                Cerrar Sesión

              </p>

            </a>

          </li>


 

        </ul>

      </nav>

      <!-- /.sidebar-menu -->

    </div>

    <!-- /.sidebar -->

  </aside>