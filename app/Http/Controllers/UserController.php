<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Validator;
use Auth;
use App\UserSalle;
use App\UserMateriel;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    
    public function getLogin(){
    	return view('auth.login');
    }
    public function login(Request $request){

			$this->validate($request,[
				'email'    => 'required|email', 
			    'password' => 'required' 
				]);
			    
			if(!Auth::attempt($request->only(['email','password']))){
				return redirect()->back()->with('messageErr','Erreur d\'authentification');
			}
			else{
				if(Auth::user()->estResponsable){
				 return redirect()->route('respHome')->with('messageSuc','Authentification réussie');;
				}
				else{
				 return redirect()->route('ensHome')->with('messageSuc','Authentification réussie');;
				}
			}
	
	 }



    public function logout()
		{
		    Auth::logout(); 
		    return redirect()->route('home');
		}


	public function Reserver(Request $request){
			$this->validate($request,[
			  'salles' => 'required',
			  'date'  => 'required',
			  'de' 	  => 'required',
			  'a'    => 'required'
			]);	
		if($request->input("de") > $request->input('a') ){
			///////////////////////
			return redirect()->back()->with('rsError','Réservation échouée !');
		}
		/// Create the new reservation
		$reservation = 	new UserSalle;
		$reservation->user_id = Auth::user()->id;
		$reservation->salle_id = $request->input('salles');
		$reservation->dateReser = $request->input('date');
		$reservation->dbtReser = $request->input('de');
		$reservation->finReser = $request->input('a');
	
       /// Get all reservations in the selected salle
		$reserve_Salle = UserSalle::where("salle_id",$reservation->salle_id)->where("dateReser",$reservation->dateReser)->orderBy("finReser","desc")->get();
		if($reserve_Salle->count() > 0){
			if($reservation->dbtReser > $reserve_Salle[0]->finReser){
				$reservation->save();
				return redirect('/consulter/salles')->with('rsSuccess','Réservation effectuée avec succes');

				}
			else
				return redirect()->back()->with('rsError','Between !');
		}
		else{
			$reservation->save();
			return redirect('/consulter/salles')->with('rsSuccess','Réservation effectuée avec succes');
		}
	}

	public function reserverSalle(Request $request){

		$this->validate($request,[
			  'salles' => 'required',
			  'date'  => 'required',
			  'de' 	  => 'required',
			  'a'    => 'required'
			]);	

		$dispo = DB::table('user_salles')
					 ->select('*')
					 ->where('salle_id','=',$request->input('salles'))
					 ->where('dateReser','=',$request->input('date'))
					 ->where('dbtReser','=',$request->input('de'))
					 ->where('finReser','=',$request->input('a'))->get();

		if(count($dispo)>0){
			return redirect()->back()->with('rsError','Réservation échouée !');
		}
		else{
				$reservation = new UserSalle();
				$reservation->user_id = Auth::user()->id;
				$reservation->salle_id = $request->input('salles');
				$reservation->dateReser = $request->input('date');
				$reservation->dbtReser = $request->input('de');
				$reservation->finReser = $request->input('a');
				$reservation->save();

				return redirect('/consulter/salles')->with('rsSuccess','Réservation effectuée avec succes');
		}
	
	}


	public function reserverMateriel(Request $request){

		$this->validate($request,[
			  'materiels' => 'required',
			  'date'  => 'required',
			  'de' 	  => 'required',
			  'a'    => 'required'
			]);

		$dispo = DB::table('user_materiels')
					 ->select('*')
					 ->where('materiel_id','=',$request->input('materiels'))
					 ->where('dateReser','=',$request->input('date'))
					 ->where('dbtReser','=',$request->input('de'))
					 ->where('finReser','=',$request->input('a'))->get();

		if(count($dispo)>0){
			return redirect()->back()->with('rsError','Réservation échouée !');
		}
		else{
				$reservation = new UserMateriel();
				$reservation->user_id = Auth::user()->id;
				$reservation->dateReser = $request->input('date');
				$reservation->materiel_id = $request->input('materiels');
				$reservation->dbtReser = $request->input('de');
				$reservation->finReser = $request->input('a');
				$reservation->save();

		return redirect('/consulter/materiels')->with('rsSuccess','Réservation effectuée avec succes');
		}			 

	}

}
