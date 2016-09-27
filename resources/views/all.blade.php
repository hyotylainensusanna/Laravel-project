@extends('main')
@section('content')
    <section class="main-header category-header text-center">
        <div class="row">
            <div class="col-lg-12">
                <h1>All blogposts</h1>
            </div>
        </div>
    </section>

    <section class="text-center">
        <div class="row">
            <div class="col-md-6 square">
                <h2>Blogpost 1</h2>
            </div>
            <div class="col-md-6 square green">
                <h2>Blogpost 2</h2>
            </div>
        </div>
    </section>
    @foreach ($posts as $post)
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->description }}</p>
    @endforeach
@endsection