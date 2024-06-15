<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frieren;

class AnimeFrieren extends Controller
{
    public function index()
    {
        $personagens = Frieren::all();
        return view('frieren.index', compact ('personagens'));
    }

    public function create()
    {
        return view('frieren.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max: 255',
            'idade' => 'required',
            'genero' => 'required|max: 255',
            'raca' => 'required|max: 255',
            'classe' => 'required|max: 255',
            'objetivo' => 'required|max: 255',
        ]);

        Frieren::create ($request->all());
        return redirect()->route('frieren.index')
                        ->with('Sucesso!', 'Personagem criado com sucesso!');
    }

    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $frieren = Frieren::findOrFail($id);
        return view('frieren.edit', compact('frieren'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|max: 255',
            'idade' => 'required',
            'genero' => 'required|max: 255',
            'raca' => 'required|max: 255',
            'classe' => 'required|max: 255',
            'objetivo' => 'required|max: 255',
        ]);

        $frieren = Frieren::findOrFail($id);
        $frieren->update($request->all());

        return redirect()->route('frieren.index')
                        ->with('Sucesso!', 'Personagem editado com sucesso!');
    }

    public function delete($id)
    {
        $frieren = Frieren::findOrFail($id);
        return view('frieren.delete', compact('frieren'));
    }

    public function destroy(string $id)
    {
        $frieren = Frieren::findOrFail($id);
        $frieren->delete();
        
        return redirect()->route('frieren.index')
                        ->with('Sucesso!', 'Personagem deletado com sucesso!');
    }
}