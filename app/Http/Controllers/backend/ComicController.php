<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::All();

        return view('page.caracters', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('page.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title'=> 'required',
            'description'=> 'required',
            'thumb'=> 'required',
            'price'=> 'required',
            'series'=> 'required',
            'sale_date'=> 'required',
            'type'=> 'required',
        ]);


        $formData = $request->all();

        $newComic = new Comic();
        $newComic->fill($formData);
        $newComic->save();

        return redirect()->route('comics.show', ['comic' => $newComic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)

    {
        return view('page.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);

        return view('page.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'title'=> 'required',
            'description'=> 'required',
            'thumb'=> 'required',
            'price'=> 'required',
            'series'=> 'required',
            'sale_date'=> 'required',
            'type'=> 'required',
        ]);

        $formData = $request->all();

        $comic = Comic::find($id);
        $comic->update($formData);

        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::find($id);

        $comic->delete();

        return redirect()->route('comics.index');
    }
}
