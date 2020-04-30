<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Logo e nome do Sistema -->
    <a href="{{route('painel.index')}}" class="brand-link">
      <img src="{{asset('AdminLTE/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3 Teste</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Informações do Usuário (opcional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> {{$user->name}}</a>
        </div>
      </div>

      <!-- Menu Lateral (Sidebar) -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Painel
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('painel.index')}}" class="nav-link active">
                  <i class="fa fa-home nav-icon"></i>
                  <p>Página principal</p>
                </a>
              </li>
             </ul>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{route('painel.usuarios.index')}}" class="nav-link active">
                  <i class="fa fa-users nav-icon"></i>
                  <p>Usuários</p>
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