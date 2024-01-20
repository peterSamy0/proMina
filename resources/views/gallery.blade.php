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
                <div class="d-flex align-items-center justify-content-evenly  p-3 border border-bottom-1">
                    <a  href="gallery/{{$album->id}}"><i class="fa-regular fa-eye text-success pointer fs-5 me-3"></i></a>

                    <i class="fa-regular fa-pen-to-square fs-5 pointer text-warning"></i>





                    {{-- delete --}}
                    <!-- Button trigger modal -->
                    <button type="button" class="border-0 bg-transparent " data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fa-solid fa-trash-can text-danger pointer fs-5"></i>
                    </button>
      
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5 text-danger" id="exampleModalLabel">Delete Album</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                are you sure you want to delete this album {{$album->name}} ?
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-success " data-bs-dismiss="modal">Cancel</button>
                            
                            <form action="gallery/{{$album->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger ">Delete</button>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    {{--  --}}
                    
                </div>
              </div>
            @endforeach
        </div>
    </div>


@endsection