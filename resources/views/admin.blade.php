@extends('main')
@section('content')
    <section class="main-header place-header text-center">
        <div class="row">
            <div class="col-lg-12">
                @if(Auth::guest())
                    <h1>All posts</h1>
                @endif
                @if(Gate::allows('admin'))
                    <h1>Admin panel</h1>
                @else
                    <h1>Edit and view posts</h1>
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
                @if(Auth::guest())
                    @foreach ($posts as $post)
                        <h2><span>{{ $post->id}}. </span>{{ $post->title }}</h2>
                        <p>{{ $post->description }}</p>
                    @endforeach
                @else
                    <h1>All Posts</h1>
                    @if(Gate::allows('admin'))
                    <a href="{{ url('/postsToPDF') }}" class="btn btn-success">Export to PDF</a>
                    <a href="{{ url('/postsToExcel') }}" class="btn btn-success">Export to Excel</a>
                    <a href="{{ url('/postsAPI') }}" class="btn btn-success">Posts API</a>
                    @endif
                    @foreach ($posts as $post)
                        {!! Form::model($post, ['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                        <h2><span>{{ $post->id}}. </span>{{ $post->title }}</h2>
                        <p>{{ $post->description }}</p>
                        <a href="{{route('posts.edit', $post->id)}}" class="btn btn-default">Edit</a>
                        @if(Gate::allows('admin'))
                        {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                        @endif
                        {!! Form::close()!!}

                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <section class="create-blog-post">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if(Auth::guest())

                @else
                    @if(Gate::allows('admin'))
                        <h1>All Users</h1>
                        <a href="{{ url('/usersToPDF') }}" class="btn btn-success">Export to PDF</a>
                        <a href="{{ url('/usersToExcel') }}" class="btn btn-success">Export to Excel</a>
                        <a href="{{ url('/usersAPI') }}" class="btn btn-success">Users API</a>
                    @endif
                    @if(Gate::allows('admin'))
                        @foreach ($users as $user)
                            {!! Form::model($user, ['route' => ['users.destroy', $user->id], 'method' => 'DELETE']) !!}
                            <h2><span>{{ $user->id}}. </span>{{ $user->name }}</h2>
                            <p>{{ $user->email }}</p>
                            <a href="{{route('users.edit', $user->id)}}" class="btn btn-default">Edit</a>
                            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                            {!! Form::close()!!}
                        @endforeach
                    @endif
                @endif
            </div>
        </div>
    </section>

@endsection