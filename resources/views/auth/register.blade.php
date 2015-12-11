@extends('layouts.master')

@section('content')

<div class="container">
    <div class="col-md-4 col-md-offset-4" style="margin-top: 10%">
        @include('partials.messages')
        <form method="POST" action="/auth/register">
            {!! csrf_field() !!}

            <div>
                Name
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            </div>

            <div>
                Email
                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
            </div>

            <div>
                Password
                <input type="password" class="form-control" name="password">
            </div>

            <div>
                Confirm Password
                <input type="password" class="form-control" name="password_confirmation">
            </div>

            <hr>
            <div>
                <button type="submit" class="btn-block btn btn-primary">Register</button>
            </div>
        </form>
    </div>
</div>
@stop