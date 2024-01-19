@extends('layout')

@section('content')
    <div>
        <h3 class="text-center my-3">Gallery Page</h3>
    </div>

    <div class="container">
        <div class="d-flex justify-content-evenly p-5">
            @foreach($albums as $album)
            <div class="card p-3" style="width: 18rem;">
                <div class="card-body">
                  <h3 class="card-title">{{$album->name}}</h3>
                </div> 
                <div class="d-flex align-items-center justify-content-between p-3 border border-bottom-1">
                    <a  href="gallery/{{$album->id}}"><i class="fa-regular fa-eye text-success pointer fs-5 me-3"></i></a>
                    <form action="gallery/{{$album->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border-0 bg-transparent ">
                            <i class="fa-solid fa-trash-can text-danger pointer fs-5"></i>
                        </button>
                    </form>
                </div>
              </div>
            @endforeach
        </div>
    </div>
@endsection