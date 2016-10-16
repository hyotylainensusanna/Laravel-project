@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Control panel</h1></div>

                <div class="panel-body">
                    <div class="row">
                        @if (Gate::allows('user',$user->id) || Gate::allows('admin'))
                        <div class="col-md-6">
                            <div class="profile-pic">
                                @if(Auth::user()->image != '')
                                    <img class="thumb img-circle" src="{{ asset('images/thumbs/' . Auth::user()->image) }}"/>
                                @else
                                    <img class="thumb img-circle" src="{{ url('images/thumbs/default/default-img.jpg') }}"/>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h1>Your personal information:</h1>
                            <h2 class="underline">{{$user->name}}</h2>
                            <p class="blog-post">{{$user->email}}</p>
                            @if (Gate::allows('admin'))
                                <h2><a class="btn btn-success" href="/posts">Admin panel</a></h2>
                            @elseif (Gate::allows('user', $user->id))
                                <h2><a class="btn btn-success" href="/posts">Edit and view posts</a></h2>
                            @endif
                        </div>
                        @else
                            <p class="alert-danger">Your have no access</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
