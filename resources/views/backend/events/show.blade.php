@extends('backend.layouts.master')
@section('title', 'Add Channels')
@section('main')

    <div class="d-flex justify-content-between">
        <div class="col-md-12 d-flex justify-content-between">
            {{-- Events area start --}}
            <div class="all-channels-area-start mr-2" style="column-count: 1; width: 68%">

                @for ($i = 0; $i <= 19; $i++)
                    <div
                        class="event-single-page single-channel-area d-flex align-items-center justify-content-between text-white">
                        <div class="d-flex align-items-center">
                            <div class="channel-banner">
                                <img src="https://loremflickr.com/g/150/120/dhaka?lock={{ $i }}" alt=""
                                    class="rounded-circle" style="width:50px; height:50px">
                                <i class="fab fa-facebook-f"></i>
                            </div>

                            <div class="channel-content ml-3 d-flex align-items-center  gap-2">
                                <h3 class="m-0 mr-3">{{ \Str::random(3) }}BadLockBack</h3>
                            </div>


                            <div class="fans d-flex align-items-center ml-3 ">
                                <span class="d-block mr-2"><i class="fal fa-users"></i> </span>
                                <span class="badge badge-warning">@php
                                    echo rand(1, 1500);
                                @endphp</span>
                            </div>

                            <div class="fans d-flex align-items-center ml-3 ">
                                <span class="d-block mr-2"><i class="fal fa-thumbs-up"></i> </span>
                                <span class="badge badge-primary">@php
                                    echo rand(1, 1500);
                                @endphp</span>
                            </div>

                            <div class="fans d-flex align-items-center ml-3 ">
                                <span class="d-block mr-2"><i class="fal fa-comments"></i> </span>
                                <span class="badge badge-success">@php
                                    echo rand(1, 1500);
                                @endphp</span>
                            </div>
                        </div>


                        <div class="event-action d-flex  justify-content-between align-items-center">
                            <a href="javascript:void(0)" class="btn btn-sm text-white"><i class="fal fa-sync-alt"></i></a>
                            <a href="javascript:void(0)" class="btn btn-sm text-white"><i class="fal fa-trash"></i></a>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" {{ $i % 4 != 0 ? 'checked' : '' }} class="custom-control-input"
                                    id="customSwitch{{ $i }}">
                                <label class="custom-control-label" for="customSwitch{{ $i }}"></label>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            {{-- Events area end --}}



            {{-- Event right side area start --}}
            <div class="event-right-side-area " style="width: 30%">
                <div class="event-big-screen">
                    <div class="screen-area">

                    </div>
                    <div class="event-single-content">
                        <h2>Lorem ipsum dolor sit, amet consectetur adipisicin.</h2>
                    </div>
                </div>
                <div class="event-small-screen">
                    <form action="" method="post">
                        <div class="form-group animate-label    ">
                            <input type="text" name="rtmp_link" id="rtmp_link" class="form-control df-dark" placeholder=" ">
                            <label for="rtmp_link" style="background: #072336">RTMP url : </label>
                        </div>
                        <div class="form-group animate-label    ">
                            <input type="text" name="stream_key" id="stream_key" class="form-control df-dark" placeholder=" ">
                            <label for="stream_key" style="background: #072336">Stream Key : </label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <button type="submit" class="btn btn-primary login-btn mr-2">Schedule</button>
                            <button type="submit" class="btn btn-danger login-btn">Live Now</button>
                        </div>
                    </form>
                </div>
            </div>
            {{-- Event right side area end --}}
        </div>
    </div>
@endsection
