@extends('backend.layouts.master')
@section('title','Dashboard')
@section('main')
<div class="d-flex justify-content-between">
    <div class="dashboard-content-left d-flex align-items-center justify-content-center flex-column">
        <span>Welcome to DStream</span>
        <strong>Let's Play with <span>DHAKALIVE</span> Stream</strong>
        <p>
            <a href=""><i class="fal fa-plus-circle"></i> Events</a>
            <a href=""><i class="fal fa-plus-circle"></i> Groups</a>
            <a href=""><i class="fal fa-plus-circle"></i> Channels</a>
        </p>
    </div>
    <div class="dashboard-right-content">

    </div>
</div>
@endsection
