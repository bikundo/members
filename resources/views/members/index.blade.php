@extends('layouts.master')

@section('content')
    <div class="album text-muted">
        <div class="container">
            @include('partials.messages')
            <h1>registered Members</h1>
            <div class="row">
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
                @foreach($members as $member)
                    <div class="card">
                        <img data-src="{!! url( $member->logo )!!}" src="{!! url( $member->logo )!!}" class=" img img-responsive" alt="Card image cap">
                        <h4 class="card-title">{!! $member->name !!}</h4>
                        <p class="card-text">{!! $member->description !!}</p>
                        @if($member->approved == 0)
                            <a href="{!! route('members.approve',$member->id) !!}" class="btn btn-success">approve</a>
                        @else
                            <button class="btn btn-success " disabled> approved</button>
                        @endif
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@stop