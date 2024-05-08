<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
            <a href="{{ route('profile.show') }}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        {{ __('Dashboard') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        {{ __('Users') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('about') }}" class="nav-link">
                    <i class="nav-icon far fa-address-card"></i>
                    <p>
                        {{ __('About us') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-circle nav-icon"></i>
                    <p>
                        Kas Brankas
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('data-kasmasuk') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Uang Masuk</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('data-setorkas') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Setoran Kas</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('data-debitmasuk') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Debit Masuk</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('data-kaskantor') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Kas Kantor</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-circle nav-icon"></i>
                    <p>
                        Kas Sales
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('data-setorkas') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Uang Masuk</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('data-setorkas') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Setoran Kas</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('data-pindahkas') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pindah Kas Sales</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('data-setoranpindahtransfersales') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Setoran Pindah Transfer Sales</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('data-rinciannotasales') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Rincian Nota Sales</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('data-debitmasuk') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Debit Masuk</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('data-kaskantor') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Kas Kantor</p>
                        </a>
                    </li>
                </ul>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle nav-icon"></i>
                        <p>
                            Kas Bank
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('data-bankpemasukan') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Bank Pemasukan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('data-pindahkasbank') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pindah Kas Bank</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
