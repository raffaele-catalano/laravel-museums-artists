<?php

namespace App\Http\Controllers;

use App\Models\Museum;
use Illuminate\Http\Request;
use App\Http\Requests\MuseumRequest;
use Illuminate\Support\Facades\Storage;


class MuseumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $museums = Museum::all();
        return view('museums.index', compact('museums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("museums.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MuseumRequest $request)
    {
        $form_data = $request->all();
        $form_data['slug'] = Museum::generateSlug($form_data['name']);

        if (array_key_exists('image', $form_data)) {
          $form_data['image_name'] = $request->file('image')->getClientOriginalName();
          $form_data['image_path'] = Storage::put('uploads', $form_data['image']);
        }


        $new_museum = new Museum();
        $new_museum->fill($form_data);
        $new_museum->save();

        return redirect()->route("museums.show", $new_museum);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Museum  $museum
     * @return \Illuminate\Http\Response
     */
    public function show(Museum $museum)
    {
        return view('museums.show', compact('museum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Museum  $museum
     * @return \Illuminate\Http\Response
     */
    public function edit(Museum $museum)
    {
        return view('museums.edit', compact('museum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Museum  $museum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Museum $museum)
    {
      $form_data = $request->all();

      if($museum->name != $form_data['name']) {
        $form_data['slug'] = Museum::generateSlug($form_data['name']);
      }

      $museum->update($form_data);
      return redirect()->route('museums.show', $museum);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Museum  $museum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Museum $museum)
    {
      $museum->delete();
      return redirect()->route('museums.index')->with('deleted', 'Elemento eliminato');
    }
}
