@extends('backend.layouts.master')
@section('title', 'Groups')
@section('main')
    <div class="d-flex justify-content-between">
        <div class="col-md-12">
            <div class="breadcrump-area-start d-flex justify-content-between align-items-center">
                <h4>Groups (12)</h4>
                <form action="" class="d-flex align-items-center gap-3">
                    <input type="text" name="group-name" placeholder="Search" class="form-control mr-2" style="width: 320px">
                </form>
                <a href="{{ route('admin.groups.create') }}" class="btn btn-primary btn-xl"><i class="fal fa-plus-circle "></i> Add New Group</a>
            </div>

            {{-- Events area start --}}
            <div class="all-groups-area-start mt-4">
                @php
                    $colors = ['fe5722', '0069D9', 'C50707', '9C36B5', '74C0FC', '04AA6D', 'b5a005', 'FFB3BB'];
                @endphp
                @for ($i = 0; $i <= 11; $i++)
                    <a href="{{ route('admin.groups.add.channel', 10) }}" class="d-block">
                        <div class="single-channel-area d-flex align-items-center justify-content-between text-white">
                            <div class="d-flex align-items-center">
                                <div class="channel-banner">
                                    <div class="alphabet" style="background: #{{ $colors[$i % 5] }}">
                                        <span>B</span>
                                    </div>
                                </div>

                                <div class="channel-content group-content ml-3">
                                    <h3>{{ \Str::random(2) }}BadLockBack</h3>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor.</p>
                                </div>
                            </div>

                            <div class="event-action d-flex flex-column justify-content-between align-items-center">
                                <span class="badge badge-warning d-inline-block mb-2">@php
                                    echo rand(1, 100);
                                @endphp</span>
                                <a href="javascript:void(0)" class="btn btn-sm text-white"><i class="fal fa-pencil"></i></a>
                                <a href="javascript:void(0)" class="btn btn-sm text-white"><i class="fal fa-trash"></i></a>
                            </div>
                        </div>
                    </a>
                @endfor
            </div>
            {{-- Events area end --}}
        </div>
    </div>
@endsection
