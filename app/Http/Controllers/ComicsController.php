<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics_list = Comic::all();
        return view('comics.index', compact('comics_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $new_comic = new Comic();
        $new_comic->fill($data);

        $new_comic->save();

        return redirect()->route('comics.show', ['comic' => $new_comic->id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $current_comic = Comic::findOrFail($id);
        return view('comics.show', compact('current_comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // dd('modifica presa in corso');
        $comic_to_update = Comic::findOrFail($id);
        return view('comics.edit', compact('comic_to_update'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // verifico se i dati sono validi
        $request->validate($this->getValidation());
        // li savo all'interno di data
        $data = $request->all();
        // salvo in base all'id
        $comic = Comic::findOrFail($id);
        $comic->update($data);
        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function getValidation() {
        return [
            'title' => 'required|max:100|min:5',
            'series' => 'required|max:50',
            'thumb' => 'required',
            'description' => 'required',
            'price' => 'required',
            'type' => 'required|max:50',
            'sale_date' => 'required'
        ];
    }
}
