@extends('layouts.master')

@section('content')
    <div class="container">
        @include('partials.messages')
        <div class="col-md-6 col-md-offset-3" style="margin-top: 10%">
            {!!  Form::open(['route' => 'members.save', 'method' => 'post', 'files'=>'true']) 	 !!}
            <div>
                Name
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            </div>
            <div>
                Logo
                <input type="file" class="form-control" name="logo" value="{{ old('logo') }}">
            </div>
            <div class='form-group'>
                {!!  Form::label('name', 'Select Sector') !!}
                <select name="sector_id" class="form-control">
                    @foreach($sectors as $sector)
                        <option value="{{$sector->id}}">{{$sector->name}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                Describe in 200 words what you are doing
                <textarea name="description" class="form-control" id=""></textarea>
            </div>
            <hr>
            <div>
                <button type="submit" class="btn-block btn btn-danger-outline">register new member</button>
            </div>
            {!!  Form::close() !!}
        </div>
    </div>
@stop