@extends('layouts.master')

@section('content')

<div class="about-us-page-container inner-container">

    <div class="about-us-title-container container">
        <span class="about-us-title-text">Meet the Team</span>
    </div>

    <div class="team-content-container">

        <div class="team-content container">

            <div class="team-member-content-container form-group col-xs-12 col-sm-12">

                <div class="member-details-container form-group col-xs-12 col-sm-4">
                    <div class="member-details">
                        <div class="member-name">Kun Gao</div>
                        <div class="member-title">President and Co-Founder</div>
                    </div>
                </div>

                <div class="member-image-container form-group col-xs-12 col-sm-8">
                    <img class="member-image" src="/assets/images/members/kun-profile.png" />
                </div>

            </div>

            <div class="team-member-content-container form-group col-xs-12 col-sm-12">

                <div class="member-details-container form-group col-xs-12 col-sm-4">
                    <div class="member-details">
                        <div class="member-name">Alyn Rockwood</div>
                        <div class="member-title">Principle Scientist and Co-Founder</div>
                    </div>
                </div>

                <div class="member-image-container form-group col-xs-12 col-sm-8">
                    <img class="member-image" src="/assets/images/members/alyn-profile.png" />
                </div>

            </div>

            <div class="team-member-content-container form-group col-xs-12 col-sm-12">

                <div class="member-details-container form-group col-xs-12 col-sm-4">
                    <div class="member-details">
                        <div class="member-name">Michael Farrell</div>
                        <div class="member-title">Software Developer</div>
                    </div>
                </div>

                <div class="member-image-container form-group col-xs-12 col-sm-8">
                    <img class="member-image no-mobile-border" src="/assets/images/members/superd-ball.png" />
                </div>

            </div>

        </div>

    </div>

</div>

@stop

@section('scripts')
@include('layouts.scripts')
@stop