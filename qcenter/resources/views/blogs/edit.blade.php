@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <br><br><h1>Edit</h1>
            <form action="{{route('blogs.update',$blogs->id)}}" method="POST">
                {{csrf_field()}}
                @method('PUT')
                <div class="form-group">
                  <label for="name">Name</label>
                  <input name="name" type="text" class="form-control" id="name" aria-describedby="nameHelp" value="{{ $blogs->name }}">
                    @error('name')
                  <small id="nameHelp" class="form-text text-danger">{{ $message }}</small>
                    @enderror        
                </div>
                    
                    <label for="nrc">NRC</label>
                    <input name="nrc" type="text" class="form-control" id="nrc" aria-describedby="nrcHelp" value="{{ $blogs->nrc}}">
                    @error('nrc')
                    <small id="nrcHelp" class="form-text text-danger">{{ $message }}</small> 
                    @enderror
                
                    <label for="address">Address</label>
                    <input name="address" type="text" class="form-control" id="address" aria-describedby="addressHelp" value="{{ $blogs->address }}">
                    @error('address')
                    <small id="addressHelp" class="form-text text-danger">{{ $message }}</small> 
                    @enderror
                
                    <label for="center">Center</label>
                    <input name="center" type="text" class="form-control" id="center" aria-describedby="centerHelp" value="{{ $blogs->center}}">
                    @error('center')
                    <small id="centerHelp" class="form-text text-danger">{{ $message }}</small> 
                    @enderror
                    <br><br>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
@endsection