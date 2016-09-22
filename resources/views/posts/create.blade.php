@include('partials.header')
<section>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Add a new Post</h1>
            {!! Form::open(array('route' => 'posts.store')) !!}
                {{ Form::label('title', 'Title: ') }}
                {{ Form::text('title', null, array('class' => 'form-control')) }}
                {{ Form::label('excerpt', 'Excerpt: ') }}
                {{ Form::text('excerpt', null, array('class' => 'form-control')) }}
                {{ Form::label('description', 'Description: ') }}
                {{ Form::textarea('description', null, array('class' => 'form-control')) }}
                {{ Form::submit('Submit', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 25px')) }}
            {!! Form::close() !!}
        </div>
    </div>



</section>
@include('partials.footer')
