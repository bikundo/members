@extends('layouts.master')
<style>
    .img-responsive{
        width: 100%;
        height:auto;
    }
</style>
@section('content')
    <div class="container">
        @include('partials.messages')
        <div class="col-md-12" style="margin-top: 10%">
            <div class="row">
                <div class="col-md-3">
                    <img data-src="{!! url( $member->logo )!!}" src="{!! url( $member->logo )!!}" class=" img img-responsive">
                </div>
                <div class=" col-md-6">
                	<h3>{!! $member->name !!}</h3>
                    <p>{!! $member->description !!}</p>
                    <div>
                        <a href="//{!! $member->website !!}"target="_blank" class="btn btn-danger-outline">
                            <i class="fa fa-globe"></i>
                        </a>
                        <a href="//{!! $member->twitter !!}"target="_blank" class="btn btn-danger-outline">
                            <i class="fa fa-twitter-square"></i>
                        </a>
                        <a href="//{!! $member->facebook !!}"target="_blank" class="btn btn-danger-outline">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="//{!! $member->google_plus !!}"target="_blank" class="btn btn-danger-outline">
                           <i class="fa fa-google-plus-square"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <h4>contact person</h4>
                    <p>name : {!! $member->contacts->first()->name !!}</p>
                    <p>email : {!! $member->contacts->first()->email !!}</p>
                    <p>Phone : {!! $member->contacts->first()->phone !!}</p>
                </div>
            </div>
            <hr>
            <h1>PROJECTS</h1>
            <br>
            <div class="card-deck-wrapper">
                <div class="card-deck">
                @foreach($member->projects as $project)
                    <div class="card card-inverse card-danger text-xs-center">
                           <h5 class="card-title">{!! $project->name !!}</h5>
                        <p class="card-text">{!! $project->description !!}</p>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
@stop