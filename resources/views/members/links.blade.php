@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="col-md-6 col-md-offset-3" style="margin-top: 10%">
            @include('partials.messages')
            {!!  Form::open(['route' => ['members.links.save',$member->id], 'method' => 'post', 'files'=>'true']) 	 !!}
            <div>
                Website
                <input type="text" class="form-control" name="website" value="{{ old('website') }}">
            </div>
            <div>
                Facebook Link
                <input type="text" class="form-control" name="facebook" value="{{ old('facebook') }}">
            </div>
            <div>
                Twitter Link
                <input type="text" class="form-control" name="twitter" value="{{ old('twitter') }}">
            </div>
            <div>
                Google Plus Link
                <input type="text" class="form-control" name="google_plus" value="{{ old('google_plus') }}">
            </div>
            <hr>
            <div>
                <button type="submit" class="btn-block btn btn-primary">save links</button>
            </div>
            {!!  Form::close() !!}
        </div>
    </div>
@stop