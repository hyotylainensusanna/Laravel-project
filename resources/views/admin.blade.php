@extends('main')
@section('content')
    <section class="main-header place-header text-center">
        <div class="row">
            <div class="col-lg-12">
                @if(Auth::guest())
                    <h1>All posts</h1>
                @else
                    <h1>Admin panel</h1>
                @endif
            </div>
        </div>
    </section>
    @if(Auth::guest())

    @else
    <section>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Create</h1>
                <br>
                <a class="btn btn-success" href="/create">Create a new blogpost</a>
            </div>
        </div>
    </section>
    @endif
    <section class="create-blog-post">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Posts</h1>
                @if(Auth::guest())
                    @foreach ($posts as $post)
                        <h2><span>{{ $post->id}}. </span>{{ $post->title }}</h2>
                        <p>{{ $post->description }}</p>
                    @endforeach
                @else
                    @foreach ($posts as $post)
                        {!! Form::model($post, ['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                        <h2><span>{{ $post->id}}. </span>{{ $post->title }}</h2>
                        <p>{{ $post->description }}</p>
                        <a href="{{route('posts.edit', $post->id)}}" class="btn btn-default">Edit</a>

                        {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                        {!! Form::close()!!}
                    @endforeach
                        <div class="row">
                            <div class="col-md-8" style="margin-top:10px">
                                <a href="{{ url('/postsToPDF') }}" class="btn btn-success">Export to PDF</a>
                                <a href="{{ url('/postsToExcel') }}" class="btn btn-success">Export to Excel</a>
                            </div>
                        </div>
                @endif
            </div>
        </div>
    </section>
    <section class="create-blog-post">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Users</h1>
                @if(Auth::guest())
                    @foreach ($users as $user)
                        <h2><span>{{ $user->id}}. </span>{{ $user->name }}</h2>
                        <p>{{ $user->email }}</p>
                    @endforeach
                @else
                    @foreach ($users as $user)
                        {!! Form::model($user, ['route' => ['users.destroy', $user->id], 'method' => 'DELETE']) !!}
                        <h2><span>{{ $user->id}}. </span>{{ $user->name }}</h2>
                        <p>{{ $user->email }}</p>
                        <a href="{{route('users.edit', $user->id)}}" class="btn btn-default">Edit</a>

                        {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                        {!! Form::close()!!}
                    @endforeach
                <div class="row">
                    <div class="col-md-8" style="margin-top:10px">
                        <a href="{{ url('/usersToPDF') }}" class="btn btn-success">Export to PDF</a>
                        <a href="{{ url('/usersToExcel') }}" class="btn btn-success">Export to Excel</a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>

@endsection