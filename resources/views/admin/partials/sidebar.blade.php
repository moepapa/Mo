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
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.orders.index' ? 'active' : '' }}" href="{{ route('admin.orders.index') }}">
                <i class="app-menu__icon fa fa-bar-chart"></i>
                <span class="app-menu__label">Orders</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.seedlings.index' ? 'active' : '' }}" href="{{ route('admin.seedlings.index') }}">
                <i class="app-menu__icon fa fa-shopping-bag"></i>
                <span class="app-menu__label">Seedlings</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.types.index' ? 'active' : '' }}" href="{{ route('admin.types.index') }}">
                <i class="app-menu__icon fa fa-briefcase"></i>
                <span class="app-menu__label">Types</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.categories.index' ? 'active' : '' }}" href="{{ route('admin.categories.index') }}">
                <i class="app-menu__icon fa fa-tags"></i>
                <span class="app-menu__label">Categories</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'user.index' ? 'active' : '' }}" href="{{ route('user.index') }}">
                <i class="app-menu__icon fa fa-tags"></i>
                <span class="app-menu__label">Registered Users</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Route::currentRouteName() == 'admin.index' ? 'active' : '' }}" href="{{ route('admin.index') }}">
                <i class="app-menu__icon fa fa-tags"></i>
                <span class="app-menu__label">Admins</span>
            </a>
        </li>
    </ul>
</aside>
