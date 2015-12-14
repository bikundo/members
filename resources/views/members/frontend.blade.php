@extends('layouts.master')

@section('content')
<style>

    .album {
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