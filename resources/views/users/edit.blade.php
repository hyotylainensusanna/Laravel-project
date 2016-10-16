@extends('layouts.app')
@section('content')
    @if(Auth::guest())
        @include('partials.unauthorized')
    @else
    <section class="main-header place-header text-center">
        <div class="row">
            <div class="col-lg-12">
                <h1>Edit a user</h1>
            </div>
        </div>
    </section>
    {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT', 'files' => true]) !!}
    <section class="blog-content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {{ Form::label('name', 'Name: ') }}
                {{ Form::text('name', null, ['class' => 'form-control input-lg']) }}
                {{ Form::label('image', 'Upload Image: ') }}
                {{ Form::file('image') }}
                {{ Form::submit('Submit', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 25px')) }}
            </div>
        </div>
    </section>
    {!! Form::close() !!}
    @endif
@endsection