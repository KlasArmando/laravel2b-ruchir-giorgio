<?php

namespace App\Http\Controllers;

use App\Album1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Album1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $album1s = Album1::all();
        return view('albums.index',compact('album1s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('albums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'artist' => 'required',
            'description' => 'required',
            'album_art' => 'required',
            'popularity' => 'required',
            'vocabulary' => 'required',
            'rhymes' => 'required',
            'similes' => 'required',
            'profanity' => 'required',
        ]);


        Album1::create($request->all());


        return redirect()->route('albums.index')
            ->with('success','Album created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Album1  $album1
     * @param  $ID
     * @return \Illuminate\Http\Response
     */
    public function show(  $ID)
    {
        $album1 = DB::table('album1s')->where('id', $ID)->first();
        return view('albums.show',compact('album1'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Album1  $album1
     * @return \Illuminate\Http\Response
     */
    public function edit( $ID)
    {
        $album1 = DB::table('album1s')->where('id', $ID)->first();
        return view('albums.edit',compact('album1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Album1  $album1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album1 $album1, $id)
    {
        request()->validate([
            'title' => 'required',
            'artist' => 'required',
            'description' => 'required',
            'album_art' => 'required',
            'popularity' => 'required',
            'vocabulary' => 'required',
            'rhymes' => 'required',
            'similes' => 'required',
            'profanity' => 'required',
        ]);

        $album = Album1::find($id);
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


        return redirect()->route('albums.index')
            ->with('success','Album updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Album1  $album1
     * @return \Illuminate\Http\Response
     */
    public function destroy(  $id)
    {
        $album1 = Album1::find($id);
        $album1->delete();


        return redirect()->route('albums.index')
            ->with('success','Album deleted successfully');
    }
}
