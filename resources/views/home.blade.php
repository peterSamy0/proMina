@extends('layout')

@section('content')
    <div>
        <h2 class="text-center pt-5 pb-2">Home Page</h2>
    </div>

    <div>
        <form class="w-50 m-auto border border-1 p-5 rounded" method="POST" action="{{ route('album') }}" enctype="multipart/form-data" id="albumForm">
            @csrf
            <div class="mb-3">
                <label for="albumName" class="form-label">Album Name</label>
                <input type="text" class="form-control" id="albumName" name="albumName">
            </div>
            <div class="mb-3" id="imageForms">
                <div class="d-flex justify-content-center mb-2">
                    <input type="text" class="form-control me-2" name="image-name[]" placeholder="image name">
                    <input type="file" class="form-control" name="image-path[]">
                </div>
            </div>
            <div class="d-flex align-items-center py-2">
                <button class="btn btn-success me-3" onclick="addImageForm(event)">
                    <i class="fa-solid fa-plus fs-6"></i>
                </button>
                <label for="">Add Another Image</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
