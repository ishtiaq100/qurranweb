<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('admin/asset/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">QURAN ACADEMY</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('admin/addcourse')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Add Course

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/allcourses')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                All Courses

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/addcurrculum')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Add Currculum

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/allcurrculum')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                All Currculum

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/addbook')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Add Book

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/allbooks')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                All Books

              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
