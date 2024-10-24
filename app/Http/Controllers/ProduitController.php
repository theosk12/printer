<?php
namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    // Afficher la liste des produits
    public function index()
    {
        $produits = Produit::all();
        return view('produits.index', compact('produits'));
    }

    // Afficher le formulaire de création d'un produit
    public function create()
    {
        return view('produits.create');
    }

    // Enregistrer un nouveau produit dans la base de données
    public function store(Request $request)
{
    // Validation des entrées
    $request->validate([
        'image' => 'required|image',
        'image2' => 'nullable|image',
        'image3' => 'nullable|image',
        'image4' => 'nullable|image',
        'description' => 'required|string',
        'phone_number' => 'required|string',
        'email' => 'required|email',
    ]);

    // Création du produit avec les images
    Produit::create([
        'image' => $request->file('image')->store('images'),
        'image2' => $request->file('image2') ? $request->file('image2')->store('images') : null,
        'image3' => $request->file('image3') ? $request->file('image3')->store('images') : null,
        'image4' => $request->file('image4') ? $request->file('image4')->store('images') : null,
        'description' => $request->description,
        'is_published' => $request->has('is_published'),
        'phone_number' => $request->phone_number,
        'email' => $request->email,
    ]);

    // Redirection avec message de succès
    return redirect()->route('produits.index')->with('success', 'Produit créé avec succès.');
}


    // Afficher un produit spécifique
    public function show($id)
    {
        $produit = Produit::findOrFail($id);
        return view('produits.show', compact('produit'));
    }

    // Afficher le formulaire d'édition d'un produit
    public function edit($id)
    {
        $produit = Produit::findOrFail($id);
        return view('produits.edit', compact('produit'));
    }

    // Mettre à jour un produit existant
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'image',
            'description' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'required|email',
        ]);

        $produit = Produit::findOrFail($id);
        $produit->update([
            'image' => $request->file('image') ? $request->file('image')->store('images') : $produit->image,
            'image2' => $request->file('image2') ? $request->file('image2')->store('images') : $produit->image2,
            'image3' => $request->file('image3') ? $request->file('image3')->store('images') : $produit->image3,
            'image4' => $request->file('image4') ? $request->file('image4')->store('images') : $produit->image4,
            'description' => $request->description,
            'is_published' => $request->has('is_published'),
            'phone_number' => $request->phone_number,
            'email' => $request->email,
        ]);

        return redirect()->route('produits.index')->with('success', 'Produit mis à jour avec succès.');
    }

    // Supprimer un produit
    public function destroy($id)
    {
        $produit = Produit::findOrFail($id);
        $produit->delete();

        return redirect()->route('produits.index')->with('success', 'Produit supprimé avec succès.');
    }
}
