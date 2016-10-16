@extends('main')
@section('content')
    @if(Auth::guest())
        @include('partials.unauthorized')
    @else
        <section class="create-blog-post">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1>Add a new Post</h1>
                    {!! Form::open(array('route' => 'posts.store', 'files' => true, 'data-parsley-validate' => '')) !!}
                        {{ Form::label('title', 'Title: ') }}
                        {{ Form::text('title', null, array('class' => 'form-control', 'required' => '')) }}
                        {{ Form::label('excerpt', 'Excerpt: ') }}
                        {{ Form::text('excerpt', null, array('class' => 'form-control', 'required' => '')) }}
                        {{ Form::label('description', 'Description: ') }}
                        {{ Form::textarea('description', null, array('class' => 'form-control', 'required' => '')) }}
                        {{ Form::label('image', 'Upload Image: ') }}
                        {{ Form::file('image') }}
                        {{ Form::submit('Submit', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 25px')) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </section>
    @endif
@endsection

@section('scripts')
    {!! Html::script('node_modules/parsleyjs') !!}
@endsection