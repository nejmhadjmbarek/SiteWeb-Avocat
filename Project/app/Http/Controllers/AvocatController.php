<?php namespace App\Http\Controllers;

use App\Dossier;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Rendezvous;
use Auth;
use App\User;
use Input;
use App\Calendrier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AvocatController extends Controller {


    public function __construct()
    {
        view()->share('nb', Rendezvous::Dmd());
    }

    public function getNouveau()
    {
        return view('avocat.nouveaudossier')->withclient(Dossier::Client())
                                            ->withopposant(Dossier::Opposant())
                                            ->withavopposant(Dossier::Avopposant());
    }
    public function getDonnee()
    {
        return view('avocat.donnee')->withval(User::Donnee());
    }

    public function getCompte()
    {

        return view('avocat.modCal')->withmsg('');
    }


    public function getJour()
    {

        return view('avocat.jour', Calendrier::Jour());
    }



    public function getSemaine()
    {
        return view('avocat.semaine', Calendrier::Semaine());
    }


    public function getModcal()
    {
        $s = Input::all();
        if($s){
            return view('avocat.modCal')->withmsg('Votre calendrier a été modifier avec succès');
        }else{
            return view('avocat.modCal')->withmsg('');
        }
    }


    public function getDemandes()
    {
        return view ('avocat.demandes')->withidm(Calendrier::Dmd());
    }


    public function postAccepter()
    {
        Rendezvous::Accepter();
        return redirect()->back() ;
    }

    public function postRefuser()
    {
        Rendezvous::Refuser();
        return redirect()->back() ;
    }

    public function postModifier()
    {
        User::Modifier();
        return redirect()->back();
    }

    public function postNvclient()
    {
     Dossier::Nvclient();
     return redirect()->back();
    }
    public function postNvopposant()
    {
        Dossier::Nvopposant();
        return redirect()->back();
    }
    public function postNvavopposant()
    {
        Dossier::Nvavopposant();
        return redirect()->back();
    }
    public function postDossier()
    {
        Dossier::Dossier();
        return redirect()->back();
    }

    public function getRecherche()
    {
        return view('avocat.recherche')->withclient(Dossier::Client());
    }

    public function postRecherche()
    {
        return view('avocat.resultat')->withval(Dossier::Recherche());
    }

    public function getArchive()
    {
        return view('avocat.archive')->witharchive(Dossier::Archive());
    }
}
