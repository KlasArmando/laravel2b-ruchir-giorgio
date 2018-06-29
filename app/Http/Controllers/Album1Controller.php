<?php

namespace App\Http\Controllers;

use App\Album1;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function show(Album1 $album1)
    {
        return view('albums.show',compact('album1'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Album1  $album1
     * @return \Illuminate\Http\Response
     */
    public function edit(Album1 $album1)
    {
        return view('albums.edit',compact('album1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Album1  $album1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album1 $album1)
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


        $album1->update($request->all());


        return redirect()->route('albums.index')
            ->with('success','Album updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Album1  $album1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album1 $album1)
    {
        $album1->delete();


        return redirect()->route('albums.index')
            ->with('success','Album deleted successfully');
    }
}
