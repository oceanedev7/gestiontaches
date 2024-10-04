<?php

use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('taches');
});

Route::get('/', [TasksController::class, 'afficher'])->name('afficherTaches');

Route::post('/add', [TasksController::class, 'ajouter'])->name('ajouterTaches');

Route::get('/delete/{id}', [TasksController::class, 'supprimer'])->name('supprimerTaches');

Route::get('/edit/{id}', [TasksController::class,'edit'])->name('editerTaches');
Route::post('/update/{id}', [TasksController::class,'modifier'])->name('modifierTaches');

// Route::get('/statut/{id}', [TasksController::class, 'toggle'])->name('modifierStatus');

