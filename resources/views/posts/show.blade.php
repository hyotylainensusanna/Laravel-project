@extends('main')
@section('content')
    <section class="main-header place-header text-center">
        <div class="row">
            <div class="col-lg-12">
                <h1>My blog</h1>
            </div>
        </div>
    </section>
    <section class="blog-content">
        <div class="row">
           <div class="col-md-8 col-md-offset-2">
               <h1 class="underline">{{$post->title}}</h1>
              <p class="blog-post">{{$post->description}}</p>
           </div>
        </div>
    </section>
@endsection
