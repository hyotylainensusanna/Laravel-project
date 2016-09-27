@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Control panel</div>

                <div class="panel-body">
                    You are logged in!
                    <li><a href="/edit">Create a new post</a></li>
                    <li><a href="/delete">Delete a post</a></li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
