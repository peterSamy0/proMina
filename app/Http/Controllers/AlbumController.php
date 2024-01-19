<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        try{
            $albums = Album::all();
            return response()->json($albums, 200);
        }catch(Throwable $th){
            return response()->json(['error' => $th->getMessage], 400);
        }
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'albumName' => 'required',
            ]);

            $album = Album::create([
                'user_id' => auth()->id(),
                'name' => $request->input('albumName'),
            ]);

            $imagesNames = $request->input('image-name');
            $imagesPaths = $request->file('image-path');

            foreach ($imagesPaths as $key => $image) {
                $imagePath = $image->store('images', 'public');

                $album->images()->create([
                    'image_path' => $imagePath,
                    'name' => $imagesNames[$key],
                ]);
            }

            return redirect()->route('home');
        } catch (Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 400);
        }
    }



    public function show()
    {
        try{
            $albums = Album::all();
            return response()->json($albums, 200);
        }catch(Throwable $th){
            return response()->json(['error' => $th->getMessage], 400);
        }
    }

    public function edit()
    {
        return view('edit');
    }

    public function update()
    {
        try{
            $albums = Album::all();
            return response()->json($albums, 200);
        }catch(Throwable $th){
            return response()->json(['error' => $th->getMessage], 400);
        }
    }

    public function destroy($id)
    {
        try{
            $album = Album::findorfail($id);
            $album->delete();
            return response()->json('album deleted successfully', 200);
        }catch(Throwable $th){
            return response()->json(['error' => $th->getMessage], 400);
        }
    }

}
