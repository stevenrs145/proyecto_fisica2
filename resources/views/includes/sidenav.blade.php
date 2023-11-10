<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ URL::asset('img/formal.png')}}" class="img-circle elevation-2" alt="User Image"><br>
          <h1 class="nombre-user">Steven Rodriguez</h1>
        </div>
        <div class="info">
          <a href="#" class="d-block">
            @guest

            @else
            {{ucfirst(trans(Auth::user()->name))}}
            @endguest
</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
              Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/primer-tema') }}" class="nav-link">
            <i class="fa-solid fa-square-root-variable"></i>
                          <p>
              Integracion Sustitucion
            </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{ url('/segundo-tema') }}" class="nav-link">
            <i class="fa-solid fa-calculator"></i>
                          <p>
                Integracion Sustitucion de integrales
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/tercer-tema') }}" class="nav-link">
            <i class="fa-solid fa-divide"></i>
                          <p>
              Integracion por partes
              </p>
            </a>
          </li>
         
          <br><br><br><br><br><br><br><br>
          <br><br><br><br><br><br><br><br><br><br><br>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <style>
    .nombre-user{
        color: #fff;
        font-size: 15px;
        white-space: nowrap;
        margin-top:5px;
    }
    .img-circle .elevation-2{
        white-space: nowrap;

    }
  </style>