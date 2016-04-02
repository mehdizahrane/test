<?php

namespace App\Http\Controllers;

use App\UserMateriel;
use App\UserSalle;
use App\Salle;
use App\Materiel;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function getHome(){
    	return view('index');
    }
    public function getConsultSalles(){
        $resSalles = UserSalle::latest('created_at')->paginate(5);
    	return view('consultation.consulter-salle',compact('resSalles'));
    }

    public function getConsultMats(){
        $resMateriels = UserMateriel::latest('created_at')->paginate(5);
    	return view('consultation.consulter-materiel',compact('resMateriels'));
    }

    public function getRespHome(){
        $resSalles = UserSalle::latest('created_at')->paginate(5);
        $resMateriels = UserMateriel::latest('created_at')->paginate(5);
    	return view('responsable.home',compact('resSalles','resMateriels'));
    }

    public function getEnsHome(){
        $resSalles = UserSalle::latest('created_at')->paginate(5);
        $resMateriels = UserMateriel::latest('created_at')->paginate(5);
    	return view('enseignant.home',compact('resSalles','resMateriels'));
    }

     public function getEnsRes(){
        $salles = Salle::lists('libelle','id');
        $materiels = Materiel::lists('libelle','id');
        return view('enseignant.reserver',compact('salles','materiels'));
    }

    public function getEtuHome(){
        $resSalles = UserSalle::latest('created_at')->paginate(5);
        $resMateriels = UserMateriel::latest('created_at')->paginate(5);

        return view('etudiant.home',compact('resSalles','resMateriels'));
    }

    public function getEdit(){
        $resSalles = UserSalle::latest('created_at')->paginate(5);
        $resMateriels = UserMateriel::latest('created_at')->paginate(5);

        return view('responsable.editer',compact('resSalles','resMateriels'));
    }
}
