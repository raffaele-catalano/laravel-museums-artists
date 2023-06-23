<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArtistRequest;
use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists = Artist::all();
        return view('artists.index', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArtistRequest $request)
    {
        $form_data = $request->all();

        $form_data['slug'] = Artist::generateSlug($form_data['name'] . ' ' . $form_data['lastname']);

        $new_artist = new Artist();

        $new_artist->fill($form_data);

        $new_artist->save();

        return redirect()->route('artists.show', $new_artist);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist)
    {
        return view('artists.show', compact('artist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function edit(Artist $artist)
    {
        return view('artists.edit', compact('artist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artist $artist)
    {
        $form_data = $request->all();

        if($artist->name != $form_data['name'] || $artist->lastname != $form_data['lastname']) {
          $form_data['slug'] = Artist::generateSlug($form_data['name'] . ' ' . $form_data['lastname']);
        }

        $artist->update($form_data);
        return redirect()->route('artists.show', $artist);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artist $artist)
    {
        $artist->delete();
        return redirect()->route('artists.index')->with('deleted', 'Elemento eliminato');
    }
}
