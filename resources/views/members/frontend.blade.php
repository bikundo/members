@extends('layouts.master')

@section('content')
<style>
    body {
        min-height: 75rem; /* Can be removed; just added for demo purposes */
    }

    .navbar {
        margin-bottom: 0;
    }

    .navbar-collapse .container-fluid {
        padding: 2rem 2.5rem;
        border-bottom: 1px solid #55595c;
    }

    .navbar-collapse h4 {
        color: #818a91;
    }

    .navbar-collapse .text-muted {
        color: #818a91;
    }

    .about {
        float: left;
        max-width: 30rem;
        margin-right: 3rem;
    }

    .social a {
        font-weight: 500;
        color: #eceeef;
    }

    .social a:hover {
        color: #fff;
    }

    .jumbotron {
        padding-top: 6rem;
        padding-bottom: 6rem;
        margin-bottom: 0;
        background-color: #fff;
    }

    .jumbotron p:last-child {
        margin-bottom: 0;
    }

    .jumbotron-heading {
        font-weight: 300;
    }

    .jumbotron .container {
        max-width: 40rem;
    }

    .album {
        min-height: 50rem; /* Can be removed; just added for demo purposes */
        padding-top: 3rem;
        padding-bottom: 3rem;
        background-color: #f7f7f7;
    }

    .card {
        float: left;
        width: 33.333%;
        padding: .75rem;
        margin-bottom: 2rem;
        border: 0;
    }

    .card > img {
        margin-bottom: .75rem;
    }

    .card-text {
        font-size: 85%;
    }

    footer {
        padding-top: 3rem;
        padding-bottom: 3rem;
    }

    footer p {
        margin-bottom: .25rem;
    }
    .img-responsive{
        width: 100%;
        height: auto;
    }
</style>
<div class="album text-muted">
    <div class="container">
        @include('partials.messages')
        <div class="row">
            @if($members->count() > 0)
                @foreach($members as $member)
                    <div class="card">
                        <img data-src="{!! url( $member->logo )!!}" src="{!! url( $member->logo )!!}" class=" img img-responsive" alt="Card image cap">
                        <h4 class="card-title">{!! $member->name !!}</h4>
                        <p class="card-text">{!! $member->description !!}</p>
                    </div>
                @endforeach
            @else
                <h2 class="text-center">No approved members.</h2>
            @endif
        </div>

    </div>
</div>
@stop