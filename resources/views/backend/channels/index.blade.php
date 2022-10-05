@extends('backend.layouts.master')
@section('title', 'Channels')
@section('main')
    <div class="d-flex justify-content-between">
        <div class="col-md-12">
            <div class="breadcrump-area-start d-flex justify-content-between align-items-center">
                <h4>Channels (15)</h4>
                <form action="" class="d-flex align-items-center gap-3">
                    <input type="text" name="channel-name" placeholder="Search" class="form-control mr-2" style="width: 320px">
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
            <div class="all-channels-area-start mt-4">

                @for ($i = 0; $i <= 11; $i++)
                    <div class="single-channel-area d-flex align-items-center justify-content-between text-white">
                        <div class="d-flex align-items-center">
                            <div class="channel-banner">
                                <img src="{{ asset('assets/images/event.png') }}" alt="" class="rounded-circle">
                                <i class="fab fa-facebook-f"></i>
                            </div>

                            <div class="channel-content ml-3">
                                <h3>BadLockBack</h3>
                                <p><span class="badge badge-soft-primary d-inline-block p-2">Facebook Page</span></p>
                            </div>
                        </div>

                        <div class="event-action d-flex flex-column justify-content-between align-items-center">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch{{$i}}">
                                <label class="custom-control-label" for="customSwitch{{$i}}"></label>
                              </div>
                            <a href="javascript:void(0)" class="btn btn-sm text-white"><i class="fal fa-sync-alt"></i></a>
                            <a href="javascript:void(0)" class="btn btn-sm text-white"><i class="fal fa-trash"></i></a>
                        </div>
                    </div>
                @endfor
            </div>
            {{-- Events area end --}}
        </div>
    </div>
@endsection
