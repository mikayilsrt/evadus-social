@extends('layouts.master')

@section("pageTitle", $tag . " - Search on " . config("app.name") . " | ")

@section('content')
    <!-- page title -->
    <div class="header-content">
        <div class="container">
            <h3 class="page-title">{{ $tag }}</h3>
        </div>
    </div>
    <!-- main container -->
    <div class="container" id="search-container">
        <div class="row">
            <div class="col-md-7" id="timeline">
                <div id="timelinefeed"></div>
            </div>
            @include("layouts._partials._block-section")
        </div>
    </div>
@endsection