<!-- sidebar.blade.php -->

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Inicio -->
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Inicio</p>
                    </a>
                </li>
                <!-- Fotos -->
                <li class="nav-item">
                    <a href="{{ route('photos') }}" class="nav-link">
                        <i class="nav-icon fas fa-camera"></i>
                        <p>Fotos</p>
                    </a>
                </li>
                <!-- Contacto -->
                <li class="nav-item">
                    <a href="{{ route('contact') }}" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>Contacto</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
