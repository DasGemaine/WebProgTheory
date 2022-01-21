@extends('layouts.main')
@section('content')

<section class="vh-100 bg-image">
    <div class="d-flex align-items-center gradient-custom-3">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg">
                    <div class="card text-dark" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">
                                Add New Story
                            </h2>

                            <form action="/stories/add-story" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="form-outline mb-4">
                                    <i class="flag flag-india"></i>
                                    <label class="form-label" for="title">Title</label>
                                    <input type="text" id="title" name="title" class="form-control form-control-lg @error('title') is-invalid @enderror" autofocus required value="{{ old ('title') }}"/>
                                    @error('title')
                                        <div class="text-danger">{{ $message }} </div>  
                                    @enderror
                                </div>


                                <div class="form-outline mb-4">
                                    <label for="ghostID">Ghost</label>
                                    <select name="ghostID" id="ghostID" class="form-control" required value="{{old ('ghostID')}}">
                                        @foreach ($ghosts as $ghost)
                                            <option value="{{ $ghost->name }}">{{ $ghost->name }}</option>
                                        @endforeach
                                    </select>

                                    @error('ghostID')
                                        <div class="text-danger">{{ $message }} </div>
                                    @enderror
                                    
                                </div>

                                

                                <div class="form-group mb-3">
                                    <input id="story" type="hidden" name="story" id="story" required value="{{ old ('story') }}">
                                    <trix-editor input="story" class="trix-content @error('story') is-invalid @enderror"></trix-editor>

                                    @error('story')
                                        <div class="text-danger">{{ $message }} </div>
                                    @enderror

                                </div>


                                <div class="text-center mt-3">
                                    <button type="submit" class="bg-danger btn  btn-block btn-lg text-light">Add Ghost</button>
                                </div>  
                            </form>               

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection