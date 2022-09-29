<div class="bsuite-sidebar-area-start">

    {{-- Sidebar logo area --}}
    <div class="bsuite-logo-area text-center">
        <a href="{{ route('admin.dashboard') }}" class="d-inline-flex align-items-center">D</a>
    </div>

    {{-- Sidebar search area --}}

    <span class="d-block mt-3 mb-3 bsuite-menu-title">Main</span>
    <ul class="sidebar-menu">
        <li><a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"><i class="fal fa-home"></i> <span>Home</span></a></li>
        <li>
            <a href="{{ route('admin.event') }}" class="{{ request()->routeIs('admin.event') ? 'active' : '' }}"><i class="fal fa-calendar"></i> <span>Events</span></a>
        </li>
        <li>
            <a href=""><i class="fal fa-layer-group"></i> <span>Groups</span></a>
        </li>
        <li>
            <a href=""><i class="fal fa-bullhorn"></i> <span>Channels</span></a>
        </li>
        <li>
            <a href=""><i class="fal fa-microphone"></i> <span>Records</span></a>
        </li>
        <li>
            <a href=""><i class="fal fa-chart-pie"></i> <span>Analytics</span></a>
        </li>
        <li>
            <a href=""><i class="fal fa-cog"></i> <span>Settings</span></a>
        </li>
        <li>
            <a href=""><i class="fal fa-sign-out"></i> <span>Logout</span></a>
        </li>
    </ul>
</div>
