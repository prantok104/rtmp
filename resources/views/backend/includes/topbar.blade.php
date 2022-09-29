<div class="bsuite-top-bar-area-start d-flex justify-content-between align-items-center bg-white p-3 border-b-1">
    <div class="bsuite-menu-hide-icon">
        <button class="button px-2 bar-btn"><i class="fal fa-bars"></i>  ({{Auth::user()->branches->name}})</button>
    </div>
    <div class="bsuite-admin-info-area">
        <div class="bsuite-admin-content d-flex align-items-center">
            <span class="mr-2">{{ Auth::user()->name }}</span>
            <ul class="bsuite-avatar">
                <li><a href=""><img src="{{ Auth::user()->getFirstMediaUrl('user-profile') }}" alt="avatar" width="50" height="50" class="rounded-circle border"></a></li>
            </ul>
        </div>
    </div>
</div>
