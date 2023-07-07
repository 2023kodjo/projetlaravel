<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class accueilController extends Controller
{
    public function index()
    {
        return view('accueil');
    }

    
    public function index2()
    {
        $contacts = Contact::paginate(4);
        return view('liste',[
            'contacts' => $contacts,
        ]);
    }


  
    
    public function edit($id)

    {
        $contacts = Contact::find($id);
    
        return view('modifier',compact('contacts'));
    }

    public function modifier_traitement(Request $request)
{
    $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'email' => 'required',
        'telephone' => 'required',
    ]);
    $contact = contact::find($request->id);
    $contact->nom = $request->nom;
    $contact->prenom = $request->prenom;
    $contact->email = $request->email;
    $contact->telephone = $request->telephone;
    $contact->update();
    return redirect('/liste')->with('status', 'Modification succes');
}


public function delete($id)
{
    $contacts = Contact::find($id);
    //verifie si  l'utilisateur existe
    if (!$contacts) {
        //rediger avec un massage d'erreur si l'utilisateur n'est pas trouvé
        return redirect()->route('liste')->with('error','utilisateur non trouvé.');
    }
    $contacts->delete();
    return redirect()->route('liste')->with('success','Suppression réussie.');
}






public function show($id)
{
        $contacts = Contact::find($id);
      if ($contacts) {
            return view('detail', compact('contacts'));
        } 
    
      else
         {        
          return "Aucun étudiant trouvé avec cet ID.";
          }
}

    // public function create()
    // {
    //     return view('contacts.create');
    // }



    public function store(Request $request)
    {
        $contact = new Contact;
        $contact->nom = $request->input('nom');
        $contact->prenom = $request->input('prenom');
        $contact->email = $request->input('email');
        $contact->telephone = $request->input('telephone');
        $contact->save();

        return redirect()->back()->with('success', 'Utilisateur enregistré avec succès');
    }


    
   
}
