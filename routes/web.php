<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\EtudiantController;

Route::get('/calculatrice', function () {
    return view('calculatrice');
});

Route::post('/calculer', function (Request $request) {

    $n1 = $request->n1;
    $n2 = $request->n2;
    $op = $request->op;

    switch ($op) {
        case '+': $res = $n1 + $n2; break;
        case '-': $res = $n1 - $n2; break;
        case '*': $res = $n1 * $n2; break;
        case '/': 
            $res = ($n2 != 0) ? $n1 / $n2 : 'Erreur division par zéro'; 
            break;
        default: $res = 0;
    }

    return "Le résultat est : " . $res;
});

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});



Route::get('/etudiant/create', [EtudiantController::class, 'create']);
Route::post('/etudiant/store', [EtudiantController::class, 'store']);