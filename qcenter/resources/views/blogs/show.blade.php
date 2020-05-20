@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <br>
            <h1>Detail</h1>
            <hr>
            <div class="form-group">
                <strong>Name:   </strong>{{$blogs->name}}<br>
                <strong>NRC:    </strong>{{$blogs->nrc}}<br>
                <strong>Address:    </strong>{{$blogs->address}}<br>
                <strong>Center: </strong>{{$blogs->center}}<br>
            </div>
            <br>
            <br>
            <a href="{{route('blogs.index')}}" class="btn btn-success">Back</a>
        </div>
    </div>
@endsection