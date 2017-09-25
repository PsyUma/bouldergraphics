@extends('layouts.master')

@section('content')

<div class="learn-page-container inner-container container">

    <div class="learning-center-container">

        <div class="learning-center-title">Learning Center</div>

        <div class="demo-videos-container">

            <div class="demo-videos-description-container">

                <div class="demo-videos-title">
                    <span class="demo-videos-title-text">Demo Videos</span>
                </div>

            </div>

            <div class="sake-cup-content demo-video-content">

                <div class="video-title">
                    <span class="video-title-text">How to Model a Sake cup</span>
                </div>

                <div class="demo-video">
                    <iframe class="demo-video-iframe" width="600" height="400"
                        src="https://www.youtube.com/embed/mf-dQ9k9-X0">
                    </iframe>
                </div>

            </div>

        </div>
    </div>


</div>

@stop

@section('scripts')
@include('layouts.scripts')
@stop