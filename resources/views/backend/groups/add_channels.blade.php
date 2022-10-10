@extends('backend.layouts.master')
@section('title', 'Add Channels')
@section('main')
    <div class="d-flex justify-content-between">
        <div class="col-md-12">
            <div class="breadcrump-area-start d-flex justify-content-between align-items-center">
                <h4>Channels (20)</h4>
                <form action="" class="d-flex align-items-center gap-3">
                    <input type="text" name="channel-name" placeholder="Search" class="form-control mr-2"
                        style="width: 320px">
                    <select name="category" id="" class="form-control" style="width: 320px">
                        <option value="">---Select the category---</option>
                        <option value="">Facebook</option>
                        <option value="">Youtube</option>
                        <option value="">Linkedin</option>
                        <option value="">Tiktok</option>
                        <option value="">Instagram</option>
                    </select>
                </form>
                <a href="#" class="btn btn-primary btn-xl"><i class="fal fa-plus-circle "></i> Add New Channel</a>
            </div>

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
        </div>
    </div>
@endsection
