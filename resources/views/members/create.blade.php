@extends('layouts.master')

@section('content')
    <div class="container">
        @include('partials.messages')
        <div class="col-md-6 col-md-offset-3" style="margin-top: 10%">
            {!!  Form::open(['route' => 'members.save', 'method' => 'post', 'files'=>'true']) 	 !!}
            <div>
                name
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            </div>
            <div>
                logo
                <input type="file" class="form-control" name="logo" value="{{ old('logo') }}">
            </div>
            <div class='form-group'>
                {!!  Form::label('name', 'select sector') !!}
                <select name="sector_id" class="form-control">
                    @foreach($sectors as $sector)
                        <option value="{{$sector->id}}">{{$sector->name}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                description
                <textarea name="description" class="form-control" id="" cols="30" rows="10">
                </textarea>
            </div>
            <hr>
            <div>
                <button type="submit" class="btn-block btn btn-primary">register</button>
            </div>
            {!!  Form::close() !!}
        </div>
    </div>
@stop