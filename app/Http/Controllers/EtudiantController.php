<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function create()
    {
        return view('etudiant.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
            'bac' => 'required',
            'filiere' => 'required',
        ]);

        return back()->with('success', 'Étudiant ajouté avec succès !');
    }
}