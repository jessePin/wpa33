@extends("layouts.main")

@section("title","hello world")

@section("sidebar")
    @parent
        <p>This is hello world section</p>
@endsection

@section("content")
<div class="row">
    <div class="col-12">
        <h1>Hello From Bootstrap - {{ $data }}</h1>
        <h2>{{ date("d/m/y") }}</h2>
        <p><button class="btn btn-success">hello world</button></p>
    </div>
</div>
@endsection