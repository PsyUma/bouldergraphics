@extends('layouts.master')

@section('content')

<div class="home-page-container inner-container">

    <div class="splash-container">

        <div class="splash-image-background-container">

            <div class="splash-image-container form-group-no-margin col-sm-6">
                <div class="splash-image text-center">
                    <img class="splash-image-icon" src="/assets/images/hero-1000.png" />
                </div>
            </div>

            <div class="splash-action-container form-group-no-margin col-sm-6">

                <div class="action-container text-center">

                    <div class="logo-icon-container">
                        <img class="logo-icon" src="/assets/images/logo.png" />
                    </div>

                    <div class="app-tag-line-container text-center">
                        <span class="splash-text">3D Conceptual Modeling Software for Mobile Devices</span>
                    </div>

                    <div class="app-download-container">

                        <a href="http://appstore.com/superd" target="_blank">
                            <button type="button" class="btn btn-boulder-download btn-download-superd-app">
                                <span class="fa fa-apple ios-app-icon"></span>
                                <span class="ios-app-text">Download SuperD</span>
                            </button>
                        </a>

                        <a href="/assets/images/superd-tutorial.pdf" download="superd-tutorial">
                            <button type="button" class="btn btn-boulder-download btn-download-superd-tutorial">
                                <span class="fa fa-download tutorial-pdf-icon"></span>
                                <span class="tutorial-pdf-text">Download Tutorial</span>
                            </button>
                        </a>

                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="app-tooling-container">

        <div class="app-tooling-content-container">

            <div class="sub-divison-content-container tooling-content-container text-center">
                <div class="tools-image-container">
                    <img class="tools-image-icon" src="/assets/images/icons/sub-divide-quads.png" />
                </div>
                <div class="tools-text-container">
                    <span class="tools-description">Touch-Driven Sub Division</span>
                </div>
            </div>

            <div class="3d-tooling-content-container tooling-content-container text-center">
                <div class="tools-image-container">
                    <img class="tools-image-icon" src="/assets/images/icons/modify.png" />
                </div>
                <div class="tools-text-container">
                    <span class="tools-description">Professional 3D Tools</span>
                </div>
            </div>

            <div class="shading-effects-content-container tooling-content-container text-center">
                <div class="tools-image-container">
                    <img class="tools-image-icon" src="/assets/images/icons/phong.png" />
                </div>
                <div class="tools-text-container">
                    <span class="tools-description">Stunning Shading Effects</span>
                </div>
            </div>

            <div class="verto-integration-content-container tooling-content-container text-center">
                <div class="tools-image-container">
                    <img class="tools-image-icon" src="/assets/images/icons/verto-icon.png" />
                </div>
                <div class="tools-text-container">
                    <span class="tools-description">Verto Studio Integration</span>
                </div>
            </div>

        </div>

    </div>

    <div class="app-description-container">

    </div>

    <div class="app-features-container">

    </div>

</div>

@stop

@section('scripts')
@include('layouts.scripts')
@stop