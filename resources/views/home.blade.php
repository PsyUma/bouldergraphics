@extends('layouts.master')

@section('content')

<div class="home-page-container inner-container">

    <div class="splash-container">

        <div class="splash-image-background-container">

            <div class="splash-image-container form-group-no-margin col-xs-5 col-sm-5 col-md-6">
                <div class="splash-image text-center">
                    <img class="splash-image-icon" src="/assets/images/hero-1000.png" />
                </div>
            </div>

            <div class="splash-action-container form-group-no-margin col-xs-7 col-sm-7 col-md-6">

                <div class="download-action-container">

                    <div class="action-container text-center">

                        <div class="logo-icon-container">
                            <img class="logo-icon" src="/assets/images/logo.png" />
                        </div>

                        <div class="app-tag-line-container text-center">
                            <span class="splash-text">3D Conceptual Modeling Software For Mobile Devices</span>
                        </div>

                        <div class="app-download-container">

                            <div class="app-download-btns-container">

                                <a href="http://appstore.com/superd" target="_blank">
                                    <button type="button" class="btn btn-boulder-download btn-download-superd-app">
                                        <span class="fa fa-apple ios-app-icon"></span>
                                        <span class="ios-app-text">Download SuperD</span>
                                    </button>
                                </a>

                                <a href="/assets/images/superd-tutorial.pdf" download="superd-tutorial">
                                    <button type="button" class="btn btn-boulder-download btn-download-superd-tutorial">
                                        <span class="fa fa-file-text-o tutorial-pdf-icon"></span>
                                        <span class="tutorial-pdf-text">Download Tutorial</span>
                                    </button>
                                </a>

                            </div>

                        </div>

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
                    <span class="tools-description">Touch-Driven SubD UI</span>
                </div>
            </div>

            <div class="3d-tooling-content-container tooling-content-container text-center">
                <div class="tools-image-container">
                    <img class="tools-image-icon" src="/assets/images/icons/modify.png" />
                </div>
                <div class="tools-text-container">
                    <span class="tools-description">Design On The Go</span>
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
                <a href="https://vertostudio.com/" target="_blank">
                    <div class="tools-image-container">
                        <img class="tools-image-icon" src="/assets/images/icons/verto-icon.png" />
                    </div>
                    <div class="tools-text-container">
                        <span class="tools-description">Verto Studio Content</span>
                    </div>
                </a>
            </div>

        </div>

    </div>

    <div class="app-description-container">

        <div class="app-description-content-container">

            <div class="app-description-feature-container form-group-no-margin col-sm-7 col-md-7">

                <div class="app-inner-description-container">

                    <div class="learn-use-title-container description-title-container">
                        <span class="title-text">Quick to Learn and Easy to Use</span>
                    </div>

                    <div class="app-content-text-container description-content-container">
                        <span class="content-text text-left">
                            SuperD uses the highly popular recursive subdivision (SubD) design interface.
                            On the backend, it employs a novel surfacing technique which results in
                            faster computation, less memory demands, and high quality surfaces.
                        </span>
                    </div>

                    <div class="divider"></div>

                    <div class="app-features-title-container description-title-container">
                        <span class="title-text">Features</span>
                    </div>

                    <div class="description-content-container">
                        <div class="description-content-list">
                            <div class="feature-list-item">SubDivision control cage interface</div>
                            <div class="feature-list-item">Dynamic level of detail via resolution settings</div>
                            <div class="feature-list-item">OBJ import/export</div>
                            <div class="feature-list-item">Move, scale, and rotate</div>
                            <div class="feature-list-item">Rouding and squaring corners and edges</div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="app-description-image-container form-group-no-margin col-sm-5 col-md-5">
                <div class="app-model-image text-center">
                    <img class="model-image" src="/assets/images/blue-model.png" />
                </div>
            </div>

        </div>

    </div>

</div>

@stop

@section('scripts')
@include('layouts.scripts')
@stop