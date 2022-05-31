
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('dashboard') }}" class="brand-link">
        <img src="{{ asset('frontend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Project</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('frontend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ url('profile') }}" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{ url('dashboard') }}" class="nav-link active  ">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>
                </li>
                @can('isUser')
                <li class="nav-item">
                    <a href="{{ url('product') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Products

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('changepassword') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Settings

                        </p>
                    </a>
                </li>
                @endcan
                @can('isAdmin')
                <li class="nav-item">
                    <a href="{{ url('user') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Users

                        </p>
                    </a>
                </li>
                @endcan

            </ul>
        </nav>
    </div>
    <!-- /.sidebar -->
</aside>
<script>
    $(document).ready(function(){
        
  $('.nav-sidebar li a').click(function(){
      console.log("hello");
    $('.nav-sidebar li a').removeClass("active");
    $(this).addClass("active");
});
});
</script>