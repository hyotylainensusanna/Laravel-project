@extends('main')
@section('content')
    <section class="main-header place-header text-center">
        <div class="row">
            <div class="col-lg-12">
                <h1>All Posts</h1>
            </div>
        </div>
    </section>
    <section class="create-blog-post">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @foreach ($posts as $post)
                    {!! Form::model($post, ['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                    <h2><span>{{ $post->id}}. </span>{{ $post->title }}</h2>
                    <p>{{ $post->description }}</p>
                    <a href="{{route('posts.edit', $post->id)}}" class="btn btn-default">Edit</a>

                    {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                    {!! Form::close()!!}
                @endforeach
            </div>
        </div>
    </section>
@endsection
