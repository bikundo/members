@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="col-md-12 " style="margin-top: 10%">
            @include('partials.messages')
            {!!  Form::open(['route' => ['members.links.save',$member->id], 'method' => 'post', 'files'=>'true']) 	 !!}
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <h3 class="text-center">Links</h3>
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
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <h3 class="text-center">contact person</h3>
                <div>
                    Name
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                </div>
                <div>
                    Email Address
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                </div>
                <div>
                    phone number
                    <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                </div>
                <div>
                    Town of residence
                    <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                </div>
            </div>
            <br>
            <br>
            <div class="m-t-1  pull-xs-right">
                <button type="submit" class="btn  btn-danger-outline">save links</button>
            </div>
            {!!  Form::close() !!}
        </div>
    </div>
@stop