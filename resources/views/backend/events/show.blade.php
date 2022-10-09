@extends('backend.layouts.master')
@section('title', 'Add Channels')
@section('main')

    {{-- Event Big screen area start --}}
    <div class="row pl-3 pr-3">
        <div class="col-md-7">
            <div class="event-big-screen">
                <div class="screen-area">

                </div>
                <div class="event-single-content">
                    <h2>Lorem ipsum dolor sit, amet consectetur adipisicin.</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, enim deleniti. Autem ipsum
                        sint quos expedita, quia aperiam quod fugit! Odit obcaecati, libero voluptatum consequatur
                        sed animi magnam nam nisi?</p>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="event-small-screen">
                <div class="d-flex align-items-center justify-content-between">
                    <button type="submit" class="btn btn-primary login-btn mr-2">Schedule</button>
                    <button type="submit" class="btn btn-danger login-btn">Live Now</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Event Big screen area end --}}

    <div class="d-flex justify-content-between">
        <div class="col-md-12">
            {{-- Events area start --}}
            <div class="all-channels-area-start mt-4" style="column-count: 1">

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
                                <p><span class="badge badge-soft-primary d-inline-block p-2">Facebook Page</span></p>
                            </div>


                            <div class="fans d-flex align-items-center ml-3 ">
                                <span class="d-block mr-2">Fans: </span>
                                <span class="badge badge-warning">@php
                                    echo rand(1, 1500);
                                @endphp</span>
                            </div>

                            <div class="fans d-flex align-items-center ml-3 ">
                                <span class="d-block mr-2">Likes: </span>
                                <span class="badge badge-primary">@php
                                    echo rand(1, 1500);
                                @endphp</span>
                            </div>

                            <div class="fans d-flex align-items-center ml-3 ">
                                <span class="d-block mr-2">Comments: </span>
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
        </div>
    </div>
@endsection
