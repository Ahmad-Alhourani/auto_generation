<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">
                {{ __('menus.backend.sidebar.general') }}
            </li>

            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/dashboard')) }}" href="{{ route('admin.dashboard') }}"><i class="icon-speedometer"></i> {{ __('menus.backend.sidebar.dashboard') }}</a>
            </li>


            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/gems')) }}" href=" {{ route('admin.gem.index') }}"><i class="icon-list"></i> {{ __('menus.backend.sidebar.gems') }}</a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/levels')) }}" href=" {{ route('admin.level.index') }}"><i class="icon-list"></i> {{ __('menus.backend.sidebar.levels') }}</a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/players')) }}" href=" {{ route('admin.player.index') }}"><i class="icon-list"></i> {{ __('menus.backend.sidebar.players') }}</a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/gem_sightings')) }}" href=" {{ route('admin.gem_sighting.index') }}"><i class="icon-list"></i> {{ __('menus.backend.sidebar.gem_sightings') }}</a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/level_gems')) }}" href=" {{ route('admin.level_gem.index') }}"><i class="icon-list"></i> {{ __('menus.backend.sidebar.level_gems') }}</a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/boxes')) }}" href=" {{ route('admin.box.index') }}"><i class="icon-list"></i> {{ __('menus.backend.sidebar.boxes') }}</a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/box_gems')) }}" href=" {{ route('admin.box_gem.index') }}"><i class="icon-list"></i> {{ __('menus.backend.sidebar.box_gems') }}</a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/box_sightings')) }}" href=" {{ route('admin.box_sighting.index') }}"><i class="icon-list"></i> {{ __('menus.backend.sidebar.box_sightings') }}</a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/items')) }}" href=" {{ route('admin.item.index') }}"><i class="icon-list"></i> {{ __('menus.backend.sidebar.items') }}</a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/box_items')) }}" href=" {{ route('admin.box_item.index') }}"><i class="icon-list"></i> {{ __('menus.backend.sidebar.box_items') }}</a>
            </li>

{{--Do not delete me :) I'm used for auto-generation--}}







            <li class="nav-title">
                {{ __('menus.backend.sidebar.system') }}
            </li>

            @if ($logged_in_user->isAdmin())
                <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/auth*'), 'open') }}">
                    <a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('admin/auth*')) }}" href="#">
                        <i class="icon-user"></i> {{ __('menus.backend.access.title') }}

                        @if ($pending_approval > 0)
                            <span class="badge badge-danger">{{ $pending_approval }}</span>
                        @endif
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{ active_class(Active::checkUriPattern('admin/auth/user*')) }}" href="{{ route('admin.auth.user.index') }}">
                                {{ __('labels.backend.access.users.management') }}

                                @if ($pending_approval > 0)
                                    <span class="badge badge-danger">{{ $pending_approval }}</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ active_class(Active::checkUriPattern('admin/auth/role*')) }}" href="{{ route('admin.auth.role.index') }}">
                                {{ __('labels.backend.access.roles.management') }}
                            </a>
                        </li>
                    </ul>
                </li>
            @endif

            <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/log-viewer*'), 'open') }}">
                <a class="nav-link nav-dropdown-toggle {{ active_class(Active::checkUriPattern('admin/log-viewer*')) }}" href="#">
                    <i class="icon-list"></i> {{ __('menus.backend.log-viewer.main') }}
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/log-viewer')) }}" href="{{ route('log-viewer::dashboard') }}">
                            {{ __('menus.backend.log-viewer.dashboard') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/log-viewer/logs*')) }}" href="{{ route('log-viewer::logs.list') }}">
                            {{ __('menus.backend.log-viewer.logs') }}
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div><!--sidebar-->
