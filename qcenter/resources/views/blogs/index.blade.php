@extends('layouts.main')

@section('content')
<div class="row">
    <div id="header" class="col-12">
<h1>Yangon Qurentine Centers</h1>
<p><a href="{{route('blogs.create')}}" class="btn btn-success">Create Volunteers</a></p>
<form action="{{route('blogs.index')}}" method="GET" class="form-inline">
    <div class="form-group">
        <input type="text" class="form-control" name="search" placeholder="center" value="{{isset($search) ? $search : ''}}" >
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Search</button>
    </div>
</form>
<br><br>
@if($message = Session::get('success'))
        <div id="msg" class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
@endif
</div>
<div class="col-12">
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <Th>NRC</Th>
            <th>Address</th>
            <th>Center</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($blogs as $blog)
        <tr>
            <td>{{$blog->id}}</td>
            <td>{{$blog->name}}</td>
            <td>{{$blog->nrc}}</td>
            <td>{{$blog->address}}</td>
            <td>{{$blog->center}}</td>
            <td>
                <form action="{{route('blogs.destroy',$blog->id)}}" method="POST">
                <a href="{{route('blogs.show',$blog->id)}}" class="btn btn-success">view</a>
                <a href="{{route('blogs.edit',$blog->id)}}" class="btn btn-primary">edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$blogs->appends(['search' => $search])->links()}}
</div>
</div>
@endsection
                