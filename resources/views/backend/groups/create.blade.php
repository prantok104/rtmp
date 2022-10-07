@extends('backend.layouts.master')
@section('title', 'Add New | Group')
@section('main')
    <div class="d-flex justify-content-between">
        <div class="col-md-12">
            <div class="breadcrump-area-start d-flex justify-content-center align-items-center">
                <h4>Add New Group</h4>
            </div>

            {{-- Events area start --}}
            <div class="group-create-area-start mt-4">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="login-form-area">
                        <div class="login-header-content text-center">
                            <h3 class="text-white">Create Group</h3>
                        </div>
                        <form action="" method="post">
                            @csrf
                            <div class="form-group animate-label">
                                <input type="text" name="title" id="title"
                                    class="form-control mt-2  @error('title') is-invalid @enderror" placeholder=" "
                                    autocomplete="false">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong> <i class="fal fa-exclamation-triangle"></i> {{ $message }}</strong>
                                    </span>
                                @enderror
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
                            <div>
                                <button type="submit" class="btn btn-primary login-btn">Add New</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- Events area end --}}
        </div>
    </div>
@endsection
