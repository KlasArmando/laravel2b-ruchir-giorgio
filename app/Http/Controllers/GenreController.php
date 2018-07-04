<?php

namespace App\Http\Controllers;

use App\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genres = Genre::all();
        return view('genres.index',compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('genres.create');
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
            'name' => 'required',
            'popularity' => 'required',
        ]);


        Genre::create($request->all());


        return redirect()->route('genres.index')
            ->with('success','Genre created successfully.');
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
        $genre = DB::table('genres')->where('id', $ID)->first();
        return view('genres.show',compact('genre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Album1  $album1
     * @return \Illuminate\Http\Response
     */
    public function edit( $ID)
    {
        $genre = DB::table('genres')->where('id', $ID)->first();
        return view('genres.edit',compact('genres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Album1  $album1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Genre $genre, $id)
    {
        request()->validate([
            'name' => 'required',
            'popularity' => 'required',
        ]);

        $genre = Genre::find($id);
        $genre->name = $request->input('name');
        $genre->popularity = $request->input('popularity');

        $genre->save();


        return redirect()->route('genres.index')
            ->with('success','Genre updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Album1  $album1
     * @return \Illuminate\Http\Response
     */
    public function destroy(  $id)
    {
        $genre = Genre::find($id);
        $genre->delete();


        return redirect()->route('genres.index')
            ->with('success','Genre deleted successfully');
    }
}