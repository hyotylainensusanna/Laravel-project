@extends('main')

@section('content')
    <section class="main-header">
        <div class="row">
            <div class="col-lg-12">
                <h1>Welcome</h1>
            </div>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-md-6 square blue">
                <h1>Newest places</h1>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12 place-square gray">place1</div>
                    <div class="col-md-12 place-square">place3</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12 place-square">place2</div>
                    <div class="col-md-12 place-square gray">place4</div>
                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12 place-square gray">place1</div>
                    <div class="col-md-12 place-square">place3</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12 place-square">place2</div>
                    <div class="col-md-12 place-square gray">place4</div>
                </div>
            </div>
            <div class="col-md-6 square green">
                <h1>Interesting places</h1>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-md-6 square blue">
                <h1>Old but gold</h1>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12 place-square gray">place1</div>
                    <div class="col-md-12 place-square">place3</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12 place-square">place2</div>
                    <div class="col-md-12 place-square gray">place4</div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact text-center">
        <div class="row">
            <div class="col-xs-12">
                <h1>title</h1>
            </div>
        </div>
    </section>
@endsection