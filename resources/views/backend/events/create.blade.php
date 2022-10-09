@extends('backend.layouts.master')
@section('title', 'Add New | Group')
@section('main')
    <div class="d-flex justify-content-between">
        <div class="col-md-12">
            <div class="breadcrump-area-start d-flex justify-content-center align-items-center">
                <h4>Add New Event</h4>
            </div>

            {{-- Events area start --}}
            <div class="group-create-area-start mt-4">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="login-form-area">
                        <div class="login-header-content text-center">
                            <h3 class="text-white">Create Event</h3>
                        </div>
                        <form action="" method="post">
                            @csrf
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-group animate-label">
                                    <input type="text" name="title" id="title"
                                        class="form-control  @error('title') is-invalid @enderror" placeholder=" "
                                        autocomplete="false">
                                    <label for="title">Title <span class="text-danger">*</span></label>
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong> <i class="fal fa-exclamation-triangle"></i> {{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group ml-2">
                                    <select name="group_name" id="group_name" class="form-control df-dark" style="width:290px">
                                        <option value="">---Select the group name---</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group animate-label">
                                <textarea name="description" id="description" placeholder=" "
                                    class="form-control @error('description') is-invalid @enderror" cols="10" rows="3"></textarea>
                                <label for="description">Description <span class="text-danger">*</span></label>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group dark-dropify">
                                <input type="file" name="logo" id="logo" class="form-control dropify"
                                            data-max-file-size="1M"
                                            data-default-file="">
                            </div>

                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-group animate-label">
                                    <input type="text" name="event_date" id="event_date"
                                        class="form-control date-picker  @error('event_date') is-invalid @enderror" placeholder=" "
                                        autocomplete="false">
                                    <label for="event_date">Date <span class="text-danger">*</span></label>
                                    @error('event_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong> <i class="fal fa-exclamation-triangle"></i> {{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group animate-label ml-2">
                                    <input type="text" name="event_time" id="event_time"
                                        class="form-control time-picker  @error('event_time') is-invalid @enderror" placeholder=" "
                                        autocomplete="false">
                                    <label for="event_time">Time <span class="text-danger">*</span></label>
                                    @error('event_time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong> <i class="fal fa-exclamation-triangle"></i> {{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <button type="submit" class="btn btn-primary login-btn mr-2">Schedule</button>
                                <button type="submit" class="btn btn-danger login-btn">Live Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- Events area end --}}
        </div>
    </div>
@endsection
