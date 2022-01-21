@extends('layouts.main')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <h1 class="h3 mb-3 fw-normal text-center">Edit Profile</h1>

                <div class="card-body">
                    <form action="/profile/{{ Auth::user()->name }}/edit" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" autofocus required value="{{ old ('name', $user->name)}}">
                            @error('name')
                                <div class="text-danger">{{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">Profile Picture</label>
                            <input type="file" class="form-control" name="image" id="image"/>
                            @error('image')
                                <div class="text-danger">{{ $message }} </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success mt-3">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 

    
@endsection