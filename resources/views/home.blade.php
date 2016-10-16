@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Control panel</div>

                <div class="panel-body">
                    @if (Gate::allows('user',$user->id) || Gate::allows('admin'))
                        Your personal information:
                        <img class="img-responsive" src="{{ asset('images/' . $user->image) }}"/>
                        <h1 class="underline">{{$user->name}}</h1>
                        <p class="blog-post">{{$user->email}}</p>
                        <h2>Upload a profile picture: </h2>
                        {!! Form::model($user, ['url' => ['/uploadImage', $user->id], 'method' => 'PUT', 'files' => true]) !!}
                            {{ Form::label('image', 'Upload: ') }}
                            {{ Form::file('image') }}
                            {{ Form::submit('Submit', array('class' => 'btn btn-success', 'style' => 'margin-top: 25px')) }}
                        {!! Form::close() !!}
                    @else
                        <p class="alert-danger">Your have no access</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
