@extends('main')
@section('content')
    <section class="main-header place-header">
        <div class="row">
            <div class="col-lg-12">
                <h1>{{$post->title}}</h1>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
           <div class="col-md-8 col-md-offset-2">
              {{$post->description}}
           </div>
        </div>
    </section>
@endsection
