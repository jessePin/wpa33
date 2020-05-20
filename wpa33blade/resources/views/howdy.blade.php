@extends("layouts.main")

@section("title","howdy world")

@section("sidebar")
    @parent
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos maiores voluptate sunt corporis deleniti, nisi similique necessitatibus sed quasi numquam officiis enim cumque ad doloribus, soluta praesentium impedit omnis! Ut!
    </p>
@endsection 

@section("content")
        <div class="row">
            <div class="col-12">
                <h1>Hello From Bootstrap!</h1>
                <p><button class="btn btn-success">Howdy partner</button></p>
            </div>
        </div>
@endsection
