@extends('main')
@section('content')
    <section class="main-header place-header text-center">
        <div class="row">
            <div class="col-lg-12">
                <h1>Edit a post</h1>
            </div>
        </div>
    </section>
    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
    <section class="blog-content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {{ Form::label('title', 'Title: ') }}
                {{ Form::text('title', null, ['class' => 'form-control input-lg']) }}

                {{ Form::label('description', 'Description: ', ['class' => 'form-spacing-top']) }}
                {{ Form::textarea('description', null, ['class' => 'form-control']) }}
                {{ Form::submit('Submit', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 25px')) }}


            </div>
        </div>
    </section>
    {!! Form::close() !!}
@endsection