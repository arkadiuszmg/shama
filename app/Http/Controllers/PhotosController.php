<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhotoRequest;
use App\Photo;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $photos = Photo::orderBy('id', 'DESC')->paginate(10);

        return view ('photos.index', [
            'photos'=> $photos
        ]);
    }

    public function create ()
    {
        return view('photos.create', compact('photos'));
    }


    public function store(PhotoRequest $request) {
        $photo = new Photo();
        $request->file('name')
            ->move(public_path('images'), $request->file('name')
                ->getClientOriginalName());
        $photo->name = $request->file('name')
            ->getClientOriginalName();

        $photo->save();
        return redirect()->route('photos.index');
    }


    public function edit(Photo $photo)
    {
        return view('photos.edit', compact('photo'));
    }

    public function update(PhotoRequest $request, Photo $photo)
    {
        $photo->update($request->all());
        return redirect(route('photos.index'));
    }

    public function destroy(Photo $photo)
    {
        //dd($photo);
        $photo->delete();
        return redirect('photos');
    }

}
