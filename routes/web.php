<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Liste des produits
Route::get('/', [ProduitController::class, 'index'])->name('produits.index');

// Formulaire de création de produit
Route::get('/produits/create', [ProduitController::class, 'create'])->name('produits.create');

// Enregistrer un nouveau produit
Route::post('/produits', [ProduitController::class, 'store'])->name('produits.store');

// Afficher un produit spécifique
Route::get('/produits/{id}', [ProduitController::class, 'show'])->name('produits.show');

// Formulaire d'édition d'un produit
Route::get('/produits/{id}/edit', [ProduitController::class, 'edit'])->name('produits.edit');

// Mettre à jour un produit
Route::put('/produits/{id}', [ProduitController::class, 'update'])->name('produits.update');

// Supprimer un produit
Route::delete('/produits/{id}', [ProduitController::class, 'destroy'])->name('produits.destroy');

// Liste des contacts
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

// Formulaire de création de contact
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');

// Enregistrer un nouveau contact
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');

// Afficher un contact spécifique
Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contacts.show');

// Formulaire d'édition d'un contact
Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');

// Mettre à jour un contact
Route::put('/contacts/{id}', [ContactController::class, 'update'])->name('contacts.update');

// Supprimer un contact
Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');
