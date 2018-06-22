<?php

namespace App\Http\Controllers;

use App\Albums;
use Illuminate\Http\Request;

class AlbumController extends Controller
{

    public function index(){
        $album = Albums::all();
        return view('index', compact('album'));
    }
    public function albums(){
        $album = Albums::all();
        return view('albums', compact('album'));
    }

    public function createAlbum(){
        return view('createAlbum');
    }

    public function storeAlbum(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'artist' => 'required',
            'description' => 'required',
            'album_art' => 'required',
        ]);

        $album = new Albums;
        $album->title = $request->input('title');
        $album->artist = $request->input('artist');
        $album->description = $request->input('description');
        $album->album_art = $request->input('album_art');
        $album->popularity = $request->input('popularity');
        $album->vocabulary = $request->input('vocabulary');
        $album->rhymes = $request->input('rhymes');
        $album->similes = $request->input('similes');
        $album->profanity = $request->input('profanity');
        $album->save();

        return redirect('/')->with('success', 'Album added');
    }

    public function viewAlbum($id){

        $album = Albums::find($id);
        return view('album', compact('album'));
    }
    public function editAlbum($id){

        $album = Albums::find($id);
        return view('editAlbum', compact('album'));
    }

    public function updateAlbum(Request $request, $id){
        $this->validate($request, [
            'title' => 'required',
            'artist' => 'required',
            'description' => 'required',
            'album_art' => 'required',
        ]);

        $album = Albums::find($id);
        $album->title = $request->input('title');
        $album->artist = $request->input('artist');
        $album->description = $request->input('description');
        $album->album_art = $request->input('album_art');
        $album->save();

        return redirect('/')->with('success', 'Album edited');
    }
}
