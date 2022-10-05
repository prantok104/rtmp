@extends('backend.layouts.master')
@section('title', 'Events')
@section('main')
    <div class="d-flex justify-content-between">
        <div class="col-md-12">
            <div class="breadcrump-area-start d-flex justify-content-between align-items-center">
                <h4>Events (5)</h4>
                <a href="#" class="btn btn-primary btn-xl"><i class="fal fa-plus-circle "></i> Add New Event</a>
            </div>

            {{-- Events area start --}}
            <div class="all-events-area-start mt-4">

                @for ($i = 0; $i <= 3; $i++)
                    <div class="single-events-area d-flex align-items-center justify-content-between text-white">
                        <div class="event-banner">
                            <img src="{{ asset('assets/images/event.png') }}" alt="">
                        </div>

                        <div class="event-content">
                            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, nihil.</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum temporibus incidunt sit quae.
                                Est deleniti voluptatem id dignissimos nesciunt eligendi.</p>
                            <p><span class="badge text-warning font-light mr-3"><i class="fal fa-hourglass"></i> Category</span> <span><i
                                        class="fal fa-clock"></i> 20 January, 2022</span></p>
                        </div>

                        <div class="event-action d-flex flex-column justify-content-between align-items-center">
                            <a href="javascript:void(0)" class="btn btn-sm text-white"><i class="fal fa-code"></i></a>
                            <a href="javascript:void(0)" class="btn btn-sm text-white"><i class="fal fa-pencil"></i></a>
                            <a href="javascript:void(0)" class="btn btn-sm text-white"><i class="fal fa-trash"></i></a>
                        </div>
                    </div>
                @endfor
            </div>
            {{-- Events area end --}}
        </div>
    </div>
@endsection
