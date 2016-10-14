@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Control panel</div>

                <div class="panel-body">
                    @if (Gate::allows('user',$user->id) || Gate::allows('admin'))
                        Your personal information:
                        <h1 class="underline">{{$user->name}}</h1>
                        <p class="blog-post">{{$user->email}}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
