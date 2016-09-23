@extends('main')

@section('content')
    <section class="main-header text-center">
        <div class="row">
            <div class="col-lg-12">
                <h1>Welcome</h1>
                <p class="white">This is a little blog about interesting places in Eindhoven</p>
            </div>
        </div>
    </section>

    <section class="text-center">
        <div class="row">
            <div class="col-md-6 square blue">
                <h1>Newest places ...</h1>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <a href="#"><div class="col-md-12 place-square gray">place 1</div></a>
                    <a href="#"><div class="col-md-12 place-square">place3</div></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <a href="#"><div class="col-md-12 place-square">place2</div></a>
                    <a href="#"><div class="col-md-12 place-square gray">place4</div></a>
                </div>
            </div>
        </div>
    </section>
    <section class="text-center">
        <div class="row">
            <div class="col-md-3">
                <div class="row">
                    <a href="#"><div class="col-md-12 place-square gray">place1</div></a>
                    <a href="#"> <div class="col-md-12 place-square">place3</div></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <a href="#"><div class="col-md-12 place-square">place2</div></a>
                    <a href="#"><div class="col-md-12 place-square gray">place4</div></a>
                </div>
            </div>
            <div class="col-md-6 square green">
                <h1>Interesting places ...</h1>
            </div>
        </div>
    </section>
    <section class="text-center">
        <div class="row">
            <div class="col-md-6 square blue">
                <h1>Old but gold ...</h1>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <a href="#"><div class="col-md-12 place-square gray">place1</div></a>
                    <a href="#"> <div class="col-md-12 place-square">place3</div></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <a href="#"><div class="col-md-12 place-square">place2</div></a>
                    <a href="#"><div class="col-md-12 place-square gray">place4</div></a>
                </div>
            </div>
        </div>
    </section>
    <section class="contact">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1 class="text-center">Contact us</h1>
                {!! Form::open(array('route' => 'posts.store')) !!}
                    {{ Form::label('title', 'Title: ') }}
                    {{ Form::text('title', null, array('class' => 'form-control')) }}
                    {{ Form::label('description', 'Description: ') }}
                    {{ Form::textarea('description', null, array('class' => 'form-control')) }}
                    {{ Form::submit('Submit', array('class' => 'btn btn-lg btn-block', 'style' => 'margin-top: 25px')) }}
                {!! Form::close() !!}
            </div>
        </div>
    </section>
@endsection