<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <ul class="app-menu">
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Dashboard</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.songs.index' ? 'active' : '' }}" href="{{ route('admin.songs.index') }}">
                <i class="app-menu__icon fas fa-music"></i>
                <span class="app-menu__label">Songs</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'user.index' ? 'active' : '' }}" href="{{ route('user.index') }}">
                <i class="app-menu__icon fas fa-user"></i>
                <span class="app-menu__label">Registered Users</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.index' ? 'active' : '' }}" href="{{ route('admin.index') }}">
                <i class="app-menu__icon fas fa-user"></i>
                <span class="app-menu__label">Admins</span>
            </a>
        </li>
    </ul>
</aside>
