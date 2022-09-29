<div class="bsuite-sidebar-area-start">

            {{--Sidebar logo area--}}
            <div class="bsuite-logo-area text-center p-3">
                <a href="{{ route('admin.analytics') }}" class="d-inline-flex align-items-center"><img src="{{ $default_values->getFirstMediaUrl('logo') }}" alt="Logo" class="mr-2"> {{ Auth::user()->branches['company']['name'] }}</a>
            </div>

            {{--Sidebar search area--}}
            <div class="bsuite-search-area">
                <form action="" class="d-flex align-items-center">
                    @csrf
                    <input type="text" name="search" placeholder="Type here...">
                    <button type="button" class="bsuite-search-btn"><i class="fal fa-search"></i></button>
                </form>
            </div>

            <span class="d-block mt-5 mb-4 bsuite-menu-title">Main</span>
            <ul class="sidebar-menu">
                <li class="menu-item {{ request()->routeIs('admin.analytics') ? 'active' : '' }}"><a href="{{ route('admin.analytics') }}"><i class="fal fa-analytics"></i> Analytics</a></li>

                <li class="menu-item {{ request()->routeIs('admin.hr*') ? 'active' : '' }}"><a href="javascript:void(0)" class="d-flex align-items-center justify-content-between"><span><i class="fal fa-users"></i> HR Management</span> <i class="fal fa-angle-down"></i></a>
                    <ul class="dropdown-menu-content depth-1">
                        <li class="drop-item  {{ request()->routeIs('admin.hr.employee*') ? 'active' : '' }}"><a href="{{ route('admin.hr.employee.index') }}"><i class="fal fa-users"></i> Employee setup</a></li>
                  </ul>
                </li>

                <li class="menu-item {{ request()->routeIs('admin.project') ? 'active' : '' }}"><a href="{{ route('admin.project') }}"><i class="fal fa-share-alt"></i> Project System</a></li>

                <li class="menu-item {{ request()->routeIs('admin.crm') ? 'active' : '' }}"><a href="{{ route('admin.crm') }}"><i class="fal fa-user-astronaut"></i> CRM System</a></li>

                <li class="menu-item {{ request()->routeIs('admin.users*') ? 'active' : '' }}">
                <a href="javascript:void(0)" class="d-flex align-items-center justify-content-between">
                <span><i class="fal fa-user-shield"></i> User Management</span>
                <i class="fal fa-angle-down"></i>
                </a>
                  <ul class="dropdown-menu-content depth-1">
                        <li class="drop-item  {{ request()->routeIs('admin.users.admin.create') ? 'active' : '' }}"><a href="{{ route('admin.users.admin.create') }}"><i class="fal fa-users"></i> Admins</a></li>
                        <li class="drop-item  {{ request()->routeIs('admin.users.role.create') ? 'active' : '' }}"><a href="{{ route('admin.users.role.create') }}"><i class="fal fa-code-branch"></i> Roles</a></li>
                        <li class="drop-item  {{ request()->routeIs('admin.users.permission.create') ? 'active' : '' }}"><a href="{{ route('admin.users.permission.create') }}"><i class="fal fa-shield-check"></i> Permissions</a></li>
                  </ul>
                </li>

                <li class="menu-item {{ request()->routeIs('admin.settings*') ? 'active' : '' }}">
                    <a href="{{ route('admin.settings.index') }}" class="d-flex align-items-center justify-content-between"><span><i class="fal fa-cogs"></i> Settings</span></a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('system.refresh') }}" class="d-flex align-items-center justify-content-between"><span><i class="fal fa-sync"></i> System Refresh</span></a>
                </li>

                <li class="menu-item"><a class="" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fal fa-sign-out"></i> Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form></li>
            </ul>
        </div>

        @push('script')
            <script>
                  $(document).ready(function(){
                        $('.menu-item').on('click', function(){
                              $(this).toggleClass('active');
                        });
                  });
            </script>
        @endpush
