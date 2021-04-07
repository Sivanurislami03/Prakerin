<div class="sidebar">
    <div class="sidebar-background"></div>
    <div class="sidebar-wrapper scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ asset('assets/img/icon.png') }}" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth::user()->name }}
                            <span class="user-level">Developer</span>
                        </span>
                    </a>
                </div>
            </div>
            <ul class="nav">
                <li class="nav-item">
                    <a href="../home">
                        <i class="fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Components</h4>
                </li>
                <li class="nav-item">
                    <a href="{{ route('provinsi.index') }}">
                        <i class="fas fa-globe"></i>
                        <p>Provinsi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kota.index') }}">
                        <i class="fas fa-building"></i>
                        <p>Kota</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kecamatan.index') }}">
                        <i class="fas fa-university"></i>
                        <p>Kecamatan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kelurahan.index') }}">
                        <i class="fas fa-university"></i>
                        <p>Kelurahan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('rw.index') }}">
                        <i class="fas fa-home"></i>
                        <p>RW</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kasus.index') }}">
                        <i class="fas fa-file-alt"></i>
                        <p>Kasus</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
