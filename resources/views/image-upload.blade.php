@extends('main')
@section('content')
    <section class="main-header image-upload-header text-center">
        <div class="row">
            <div class="col-lg-12">
                <h1>Image upload</h1>
            </div>
        </div>
    </section>
    <section class="section-padding">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                <img src="/images/{{ Session::get('path') }}">
            @endif
            <form action="{{ url('image-upload') }}" enctype="multipart/form-data" method="POST">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <input type="file" name="image" />
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success">Upload</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </section>
@endsection