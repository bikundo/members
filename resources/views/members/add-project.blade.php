@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="col-md-12 " style="margin-top: 10%">
            @include('partials.messages')
            {!!  Form::open(['route' => ['members.project.save',$member->id], 'method' => 'post', 'files'=>'true']) 	 !!}
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div>
                    Name of the project
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                </div>
                <input type="hidden" name="member_id" value="{{$member->id}}">
                <div>
                    Link
                    <input type="text" class="form-control" name="link" value="{{ old('link') }}">
                </div>

            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div>
                    Describe the project in 200 words
                    <textarea name="description" class="form-control" id="" rows="10"></textarea>
                </div>
            </div>
            <br>
            <br>
            <div class="m-t-1  pull-xs-right">
                <button type="submit" name="submitBtn" value="another" class="btn btn-danger-outline">save and add another</button>
                <button type="submit" name="submitBtn" value="save" class="btn  btn-danger-outline">save project</button>
            </div>
            {!!  Form::close() !!}
        </div>
    </div>
@stop