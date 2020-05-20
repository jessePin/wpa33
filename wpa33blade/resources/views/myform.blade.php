@extends('layouts.main')

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('myform') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input name="name" class="form-control" type="text" 
                        placeholder="Your name" value="{{ old('name') }}" />
                        @error("name")
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push("script")
    <script>
        alert("myform");
    </script>
@endpush