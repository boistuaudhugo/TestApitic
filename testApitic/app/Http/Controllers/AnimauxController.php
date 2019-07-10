<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimauxController extends Controller
{
     public function index(){
        
        return view('/index');
    }
    
    
    public function listeAnimaux(){
        
        $animaux = \App\Animaux::all();
        
        
        
        return view('/listeAnimaux',compact('animaux'));
    }
    
    public function ajouter(){
        
        return view('/ajout');
    }
    
    public function addAnimal(){
        
      /*  $verif=array( //Défini les messages d'erreurs
                'required'      => '%s : Veuillez compléter le champs.',
                'alpha'         => '%s : Seuls les lettres sont autorisés.',
                'alpha_numeric' => '%s : Les caractères spéciaux ne sont pas autorisés.',
                'min_length'    => '%s : Minimum 3 caractères.',
                'max_length'    => '%s : Nombre de caractères limités.',
                'is_unique'     => '%s : Est déjà connue.'
            );
                
        
        //Défini les règles de saisie
        $this->form_validation->set_rules('nom','Nom*','trim|required|alpha_numeric|min_length[3]|max_length[30]|is_unique[animauxes.nom]',$verif);
        $this->form_validation->set_rules('type','type*','trim|required',$verif);
        $this->form_validation->set_rules('carac','Caracteristique*','trim|required|min_length[3]|max_length[50]|is_unique[_compte.mail]',$verif);
        
        if($this->form_validation->run()!==FALSE){ //Si les règles sont respectés*/
        
        
            $animal = new \App\Animaux();
        
            $animal->nom = request('nom');
            $animal->type = request('type');

            if(request('type') == 'Reptile'){
                $animal->scale = request('carac');
            }

            if(request('type') == 'Mammifere'){
                $animal->fur = request('carac');
            }

            if(request('type') == 'Oiseau'){
                $animal->feather = request('carac');
            }


            $animal->save();
            
            return redirect('/listeAnimaux');
        
    }
    
    public function destroy($id){
        
    
        
        \App\Animaux::find($id)->delete(); 
        
        
        
        return redirect('/listeAnimaux');
        
    }
    
    public function update($id){
        
        $animal = \App\Animaux::find($id);
        
        $animal->nom = request('nom');
        $animal->type = request('type');
        
        if(request('type') == 'Reptile'){
            $animal->scale = request('carac');
        }

        if(request('type') == 'Mammifere'){
            $animal->fur = request('carac');
         }

        if(request('type') == 'Oiseau'){
            $animal->feather = request('carac');
        }
        
        $animal->save();
            
        return redirect('/listeAnimaux');

    }
    
    public function modifier($id){
        
        $animal = \App\Animaux::find($id); 
        
        return view('/modifier',compact('animal'));
    }

}
