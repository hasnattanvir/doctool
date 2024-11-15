<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{\URL::to('/')}}" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Hasnat Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ Auth::user()->picture }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block admin_name">
            {{Auth::user()->name}}
          </a>
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
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link {{(request()->is('admin/dashboard'))?'active':''}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('admin.dashboard')}}" class="nav-link">
                    <i class="fa fa-fw fa-angle-right"></i>
                    <p>Dashboard</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link {{(request()->is('admin/admin/patients'))?'active':''}}">
                  <i class="nav-icon fas fa-user-plus"></i>
                  <p>
                    Patient info
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('admin.patients.index')}}" class="nav-link">
                      <i class="fa fa-fw fa-angle-right"></i>
                      <p>All Patient</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('patients.create')}}" class="nav-link">
                      <i class="fa fa-fw fa-angle-right"></i>
                      <p>Add New Patient</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('patients.trashIndex')}}" class="nav-link">
                      <i class="fa fa-fw fa-angle-right"></i>
                      <p>Trash Datas</p>
                    </a>
                  </li>
                </ul>
            </li>

            

            <li class="nav-item">
                <a href="#" class="nav-link {{(request()->is('admin/profile'))?'active':''}}">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Profile
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('admin.profile')}}" class="nav-link">
                      <i class="fa fa-fw fa-angle-right"></i>
                      <p>General</p>
                    </a>
                  </li>
                  
                </ul>
            </li>


            <li class="nav-item">
                <a href="#" class="nav-link {{(request()->is('admin/settings'))?'active':''}}">
                  <i class="nav-icon fas fa-cogs"></i>
                  <p>
                    Settings
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('admin.settings')}}" class="nav-link">
                      <i class="fa fa-fw fa-angle-right"></i>
                      <p>General</p>
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