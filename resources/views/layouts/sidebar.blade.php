<aside class="admin-sidebar">
    <div class="sidebar-header">
        <div class="logo">
            <i data-feather="camera"></i>
            <span>CameraHub</span>
        </div>
        <button class="sidebar-toggle">
            <i data-feather="menu"></i>
        </button>
    </div>

    <div class="sidebar-menu">
        <ul>
            <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}"><i data-feather="home"></i>&nbsp;&nbsp;<span>Dashboard</span></a>
            </li>
            <li class="{{ request()->routeIs('admin.product') ? 'active' : '' }}">
                <a href="{{ route('admin.product') }}"><i data-feather="shopping-bag"></i>&nbsp;&nbsp;<span>Produk</span></a>
            </li>
            <li class="{{ request()->routeIs('admin.category.index') ? 'active' : '' }}">
                <a href="{{ route('admin.category.index') }}"><i data-feather="tag"></i>&nbsp;&nbsp;<span>Kategori</span></a>
            </li>
            <li class="{{ request()->routeIs('admin.brand') ? 'active' : '' }}">
                <a href="{{ route('admin.brand') }}"><i data-feather="award"></i>&nbsp;&nbsp;<span>Brand</span></a>
            </li>
            <li class="{{ request()->routeIs('admin.sales') ? 'active' : '' }}">
                <a href="{{ route('admin.sales') }}"><i data-feather="dollar-sign"></i>&nbsp;&nbsp;<span>Penjualan</span></a>
            </li>
            <li class="{{ request()->routeIs('admin.customer.index') ? 'active' : '' }}">
                <a href="{{ route('admin.customer.index') }}"><i data-feather="users"></i>&nbsp;&nbsp;<span>Pelanggan</span></a>
            </li>
            <li class="{{ request()->routeIs('admin.shipping') ? 'active' : '' }}">
                <a href="{{ route('admin.shipping') }}"><i data-feather="truck"></i>&nbsp;&nbsp;<span>Pengiriman</span></a>
            </li>
            <li class="{{ request()->routeIs('admin.review') ? 'active' : '' }}">
                <a href="{{ route('admin.review') }}"><i data-feather="message-square"></i>&nbsp;&nbsp;<span>Ulasan</span></a>
            </li>
            <li class="{{ request()->routeIs('admin.settings') ? 'active' : '' }}">
                <a href="{{ route('admin.settings') }}"><i data-feather="settings"></i>&nbsp;&nbsp;<span>Pengaturan</span></a>
            </li>
        </ul>
    </div>

    <div class="sidebar-footer">
        <div class="user-profile">
            <div class="avatar">
                <img src="https://ui-avatars.com/api/?name=Admin&background=667eea&color=fff" alt="Admin">
            </div>
            <div class="user-info">
                {{ Auth::user()->name }}
                <div class="role">Admin</div>
            </div>
            <form method="POST" action="{{ route('logout') }}" style="margin:0;">
                @csrf
                <button type="submit" class="logout" style="background:none;border:none;padding:0;cursor:pointer;">
                    <i data-feather="log-out"></i>
                </button>
            </form>
        </div>
    </div>
</aside>
