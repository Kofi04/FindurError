<?php

namespace App\Http\Controllers;

use App\Models\erreur;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index(){
        $erreur =erreur::all();
        return view ('accueil',compact('erreur'));
    }
    public function home(){
        return view ('home');
    }

    // public function store (Request $request){
    //     erreur::create([
    //         'nom'=> $request->nom,
    //         'lang'=> $request->lang,
    //         'probleme'=>$request->probleme,
            
    //         'image'=>'required|image|mimes:jpg,png,jpeg,gif,svg'->image,
    // ]);
    
public function store(Request $request)
{
    $request->validate([
        'nom'=>'required',
        'lang'=>'required',
        'probleme'=>'required',
        'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
    ]);
    $path = $request->file('image')->store('imagesolus', 'public');
    $erreur=new erreur();

    $erreur->nom=$request->nom;
    $erreur->lang=$request->lang;
    $erreur->probleme=$request->probleme;
    $erreur->image=$path;

     $erreur->save();

    $erreurs=erreur::all();
    return back()->with("success","Réponse enregistrée");
   
}


// public function rechercher(Request $request)
// {
//     $term = $request->input('term');
   
//     // Effectuer la recherche dans la base de données
//     $resultats = erreur::where('lang', '%'.$term.'%')
//                             ->get();
    
//     // Passer les résultats de recherche à la vue
//     return view('resultats')->with('resultats', $resultats);
// } 

}
    

