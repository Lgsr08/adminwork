<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link  @if($activeLink['section'] == 'dashboard') active @endif">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>
{{--   TODO descomentar cuando existan usuarios     --}}
{{--        <li class="nav-item @if($activeLink['section'] == 'users')  menu-open @endif">--}}
{{--            <a href="#" class="nav-link @if($activeLink['section'] == 'users')  active @endif">--}}
{{--                <i class="nav-icon fas fa-users"></i>--}}
{{--                <p>--}}
{{--                    Usuarios--}}
{{--                    <i class="right fas fa-angle-left"></i>--}}
{{--                </p>--}}
{{--            </a>--}}
{{--            <ul class="nav nav-treeview">--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="{{route('users.index')}}" class="nav-link--}}
{{--                        @if($activeLink['section'] == 'users' and $activeLink['page'] == 'list')--}}
{{--                            active--}}
{{--                        @endif">--}}
{{--                        <i class="fas fa-list nav-icon"></i>--}}
{{--                        <p>Listado</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="{{route('users.create')}}" class="nav-link--}}
{{--                     @if($activeLink['section'] == 'users' and $activeLink['page'] == 'create')--}}
{{--                            active--}}
{{--                    @endif--}}
{{--                    ">--}}
{{--                        <i class="fas fa-plus nav-icon"></i>--}}
{{--                        <p>Crear</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
    </ul>
</nav>
