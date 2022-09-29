{{--Include header --}}
@include('backend.includes.header')

{{--wrapper-area-start--}}
<div id="wrapper">
{{--Dashboard area start--}}
    <div class="bsuite-dashboard-content d-flex justify-content-between">

        {{--Sidebar area start--}}
        @include('backend.includes.sidebar')
        {{--Sidebar area end--}}

        {{--Main area start--}}
        <div class="bsuite-main-area-start">

            {{--Topbar area start--}}
            @include('backend.includes.topbar')
            {{--Topbar area end--}}

            {{--main content area start--}}
            <main class="bsuite-main-content">
                @yield('main')
            </main>
            {{--main content area end--}}

        </div>
        {{--Main area end--}}

    </div>
{{--Dashboard area end--}}
</div>
{{--wrapper-area-end--}}

{{--Include footer--}}
@include('backend.includes.footer')
