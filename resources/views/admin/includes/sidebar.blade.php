<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
    
      <li class="nav-item">
        <a class="nav-link " href="/home">
          <i class="bi bi-grid"></i>
          <span>Halaman Utama</span>
        </a>
      </li><!-- End Dashboard Nav -->
    
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Pilihan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('daftar.index') }}">
              <i class="bi bi-circle"></i><span>Daftar</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->
    </ul>
    
    </aside><!-- End Sidebar-->