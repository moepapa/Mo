<header class="app-header">
    <a class="app-header__logo" href="{{ route('admin.seedlings.index') }}">DahliaSeedlings</a>
    <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <ul class="app-nav">
        <li class="app-search">
            <form action="{{ route('admin.seedlings.search') }}" method="GET" class="search-form">
                <div class="input-group">
                    <input type="text" class="search-box" name="query" value="{{ request()->input('query') }}" id="query" placeholder="Search for seedlings">
                </div>
            </form>
        </li>
        <!-- Admin Menu-->
        <li class="dropdown">
            <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
                <li>
                    <a class="dropdown-item" href="{{ route('admin.logout') }}"><i class="fa fa-sign-out fa-lg"></i> Logout</a>
                </li>
            </ul>
        </li>
    </ul>
</header>