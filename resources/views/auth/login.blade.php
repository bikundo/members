@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="col-md-4 col-md-offset-4" style="margin-top: 10%">
            @include('partials.messages')
            <form method="POST" action="/auth/login">
                {!! csrf_field() !!}
                <div>
                    Email
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                </div>

                <div>
                    Password
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <hr>
                <div>
                    <button type="submit" class="btn-block btn btn-danger-outline">Login</button>
                </div>
            </form>
        </div>
    </div>
@stop