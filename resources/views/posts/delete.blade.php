@extends('main')
@section('content')
    <section class="create-blog-post">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Add a new Post</h1>
                @foreach ($posts as $post)
                    <p>This is a post{{ $post->id }}</p>
                @endforeach

            </div>
        </div>
    </section>
@endsection
