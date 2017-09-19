@extends('layouts.master')

@section('content')

<div class="home-page-container inner-container">

    <div class="splash-container">

        <div class="splash-image-background-container">

            <div class="splash-image-container form-group-no-margin col-sm-6">
                <div class="splash-image text-center">
                    <img class="splash-image-icon" src="/assets/images/splash-image.png" />
                </div>
            </div>

            <div class="splash-action-container form-group-no-margin col-sm-6">

                <div class="action-container text-center">

                    <div class="logo-icon-container">
                        <img class="logo-icon" src="/assets/images/logo.png" />
                    </div>

                    <div class="app-tag-line-container text-center">
                        <span class="splash-text">The worlds most advanced Sub Division modeling software</span>
                    </div>

                    <div class="app-download-container">

                        <button type="button" class="btn btn-boulder btn-download-superd-app">
                            <a href="http://appstore.com/superd" target="_blank">Download SuperD</a>
                        </button>

                    </div>
                </div>

            </div>

        </div>

    </div>

    </div>

</div>

@stop

@section('scripts')
@include('layouts.scripts')
@stop