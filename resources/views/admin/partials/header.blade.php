<header class="app-header">
    <a class="app-header__logo" href="#">{{ config('app.name') }}</a>
    <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <ul class="app-nav">
        <li class="app-search">
            <input class="app-search__input" type="search" placeholder="Search" />
            <button class="app-search__button">
                <i class="fa fa-search"></i>
            </button>
        </li>
        <li class="dropdown">
            <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
            <ul class="app-notification dropdown-menu dropdown-menu-right">
                <li class="app-notification__title">
                    Usted tiene 4 notificaciones nuevas.
                </li>
                <div class="app-notification__content">
                    <li>
                        <a class="app-notification__item" href="javascript:;">
                            <span class="app-notification__icon">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x text-danger"></i>
                                    <i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i>
                                </span>
                            </span>
                            <div>
                                <p class="app-notification__message">
                                    Servidor de mail no funciona
                                </p>
                                <p class="app-notification__meta">Hace 5 minutos</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="app-notification__item" href="javascript:;">
                            <span class="app-notification__icon">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x text-success"></i>
                                    <i class="fa fa-money fa-stack-1x fa-inverse"></i>
                                </span>
                            </span>
                            <div>
                                <p class="app-notification__message">
                                    Transaccion completada
                                </p>
                                <p class="app-notification__meta">Hace 2 dias</p>
                            </div>
                        </a>
                    </li>
                </div>
                <li class="app-notification__footer">
                    <a href="#">Ver todas las notificaciones.</a>
                </li>
            </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown">
            <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
                <li>
                    <a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a>
                </li>
                <li>
                    <a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a>
                </li>
                <li>
                <a class="dropdown-item" href="{{ route('admin.logout') }}"><i class="fa fa-sign-out fa-lg"></i> Cerrar sesion</a>
                </li>
            </ul>
        </li>
    </ul>
</header>