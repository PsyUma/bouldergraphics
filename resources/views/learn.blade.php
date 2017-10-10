@extends('layouts.master')

@section('content')

<div class="learn-page-container inner-container container">

    <div class="learning-center-container">

        <div class="learning-center-title">Learning Center</div>

        <div class="demo-videos-container">

            <div class="demo-videos-description-container">

                <div class="demo-videos-title">
                    <div class="demo-videos-title-text">Demo Videos</div>
                </div>

            </div>

            <div class="sake-cup-content demo-video-content">

                <div class="video-title">
                    <span class="video-title-text">How to Model a Sake Cup</span>
                </div>

                <div class="demo-video">
                    <iframe class="demo-video-iframe" width="600" height="400"
                        src="https://www.youtube.com/embed/mf-dQ9k9-X0">
                    </iframe>
                </div>

            </div>

            <div class="sake-bottle-content demo-video-content">

                <div class="video-title">
                    <span class="video-title-text">How to Model a Sake Bottle</span>
                </div>

                <div class="demo-video">
                    <iframe class="demo-video-iframe" width="600" height="400"
                        src="https://www.youtube.com/embed/EPf5clqB3d0">
                    </iframe>
                </div>

            </div>

            <div class="smooth-subd-modeling-content demo-video-content">

                <div class="video-title">
                    <span class="video-title-text">Modeling on iOS</span>
                </div>

                <div class="demo-video">
                    <iframe class="demo-video-iframe" width="600" height="400"
                        src="https://www.youtube.com/embed/VcckvPj2z9E">
                    </iframe>
                </div>

            </div>

            <div class="design-session-content demo-video-content">

                <div class="video-title">
                    <span class="video-title-text">Design Session Example</span>
                </div>

                <div class="demo-video">
                    <iframe class="demo-video-iframe" width="600" height="400"
                        src="https://www.youtube.com/embed/IUX35b9hItg">
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