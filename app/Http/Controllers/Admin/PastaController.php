<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Pasta;

class PastaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pastas = Pasta::all();

        return view('admin.pastas.index', compact('pastas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pastas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->all();

        $pasta = new Pasta();
        $pasta->src = $formData['src'];
        $pasta->title = $formData['title'];
        $pasta->type = $formData['type'];
        $pasta->cooking_time = $formData['cooking_time'];
        $pasta->weight = $formData['weight'];
        $pasta->description = $formData['description'];
        $pasta->save();

        return redirect()->route('pastas.index');
        // oppure
        // return redirect()->route('pastas.show', ['pasta' => $pasta->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pasta = Pasta::findOrFail($id);

        return view('admin.pastas.show', compact('pasta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
