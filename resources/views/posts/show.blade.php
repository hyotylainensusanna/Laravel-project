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
               @if($post->image != '')
                   <img id="normal" class="img-responsive" src="{{ asset('images/' . $post->image) }}" onmouseover="showHide(this, 'pixelate')"/>
                   <img id="pixelate" class="img-responsive" src="{{ asset('images/pixelated/' . $post->image) }}" onmouseout="showHide(this, 'normal')"/>
               @else
                   <img class="img-responsive" src="{{ asset('images/default/default-img-posts.jpg') }}"/>
               @endif
           </div>
        </div>
    </section>
    <script>
        $('#pixelate').hide();
        function showHide(a,b){
            a.style.display = 'none';
            b=document.getElementById(b);
            b.style.display = 'block';
        }
    </script>
@endsection
