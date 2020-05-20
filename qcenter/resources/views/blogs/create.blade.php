@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <br><br><h1>create a volunteer</h1>
            <form action="{{route('blogs.store')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                  <label for="name">Name</label>
                  <input name="name" type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="name" value="{{ old('name') }}">
                    @error('name')
                  <small id="nameHelp" class="form-text text-danger">{{ $message }}</small>
                    @enderror        
                </div>
                    
                    <label for="nrc">NRC</label>
                    <input name="nrc" type="text" class="form-control" id="nrc" aria-describedby="nrcHelp" placeholder="nrc" value="{{ old('nrc') }}">
                    @error('nrc')
                    <small id="nrcHelp" class="form-text text-danger">{{ $message }}</small> 
                    @enderror
                
                    <label for="address">Address</label>
                    <input name="address" type="text" class="form-control" id="address" aria-describedby="addressHelp" placeholder="address" value="{{ old('address') }}">
                    @error('address')
                    <small id="addressHelp" class="form-text text-danger">{{ $message }}</small> 
                    @enderror
                
                    <label for="center">Center</label>
                    <input name="center" type="text" class="form-control" id="center" aria-describedby="centerHelp" placeholder="center" value="{{ old('center') }}">
                    @error('center')
                    <small id="centerHelp" class="form-text text-danger">{{ $message }}</small> 
                    @enderror
                    <br><br>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
@endsection