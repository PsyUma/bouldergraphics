@extends('layouts.master')

@section('content')

<div class="gallery-page-container inner-container container" data-ng-controller="GalleryController">

    <div class="gallery-content-container">

        <div class="gallery-title-text">Model Gallery</div>

        <div class="gallery-container">

            <div class="gallery-nav-left-container photo-gallery-nav-container text-center">
                <div class="photo-gallery-nav-icon-container" data-ng-click="ngClickScrollGalleryLeft()">
                    <div class="photo-gallery-nav-left photo-gallery-nav-icon">
                        <span class="nav-left-icon-top nav-icon"></span>
                        <span class="nav-left-icon-bottom nav-icon"></span>
                    </div>
                </div>
            </div>

            <div class="gallery-nav-right-container photo-gallery-nav-container text-center">
                <div class="photo-gallery-nav-icon-container" data-ng-click="ngClickScrollGalleryRight()">
                    <div class="photo-gallery-nav-right photo-gallery-nav-icon">
                        <span class="nav-right-icon-top nav-icon"></span>
                        <span class="nav-right-icon-bottom nav-icon"></span>
                    </div>
                </div>
            </div>

            <div class="photo-images-gallery-container">

                @foreach ($images as $image)
                <div class="photo-image-container">
                    <img class="photo-image" src="/assets/images/models/{{ $image }}">
                </div>
                @endforeach

            </div>

        </div>

    </div>


</div>

@stop

@section('scripts')
@include('layouts.scripts')
@stop