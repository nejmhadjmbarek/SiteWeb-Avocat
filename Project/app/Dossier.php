<?php namespace App;
use Auth;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class Dossier extends Model
{
    public function scopeNvclient()
    {
        $all = Input::all();
        if($all['mm'] < 9){
            $date= $all['jj'].'-0'.$all['mm'].'-'.$all['aaaa'];
        }else{
            $date= $all['jj'].'-'.$all['mm'].'-'.$all['aaaa'];
        }

      DB::insert('insert into personne(nom,prenom,tel,genre,fax,gsm,email,identite,date,lieu_identite,
                           adresse,statut,user_id) values(?,?,?,?,?,?,?,?,?,?,?,?,?)',[$all['nom'],$all['prenom'],$all['tel'],
                                                                                       $all['genre'],$all['fax'],$all['gsm'],
                                                                                       $all['email'],$all['identite'],$date,$all['lieu_ident'],
                                                                                       $all['adresse'],'client',Auth::user()->id]);

    }


    public function scopeNvopposant()
    {
        $all = Input::all();
        if($all['mm'] < 9){
            $date= $all['jj'].'-0'.$all['mm'].'-'.$all['aaaa'];
        }else{
            $date= $all['jj'].'-'.$all['mm'].'-'.$all['aaaa'];
        }

        DB::insert('insert into personne(nom,prenom,tel,genre,fax,gsm,email,identite,date,lieu_identite,
                           adresse,statut,user_id) values(?,?,?,?,?,?,?,?,?,?,?,?,?)',[$all['nom'],$all['prenom'],$all['tel'],
                                                                                       $all['genre'],$all['fax'],$all['gsm'],
                                                                                       $all['email'],$all['identite'],$date,$all['lieu_ident'],
                                                                                       $all['adresse'],'opposant',Auth::user()->id]);
    }

    public function scopeNvavopposant()
    {
        $all = Input::all();

        DB::insert('insert into avocat(nom,prenom,tel,email,fax,gsm,remarque,genre,specialite,adresse,user_id) values(?,?,?,?,?,?,?,?,?,?,?)',
                                                        [$all['nom'],$all['prenom'],$all['tel'],$all['email'],$all['fax'],
                                                         $all['gsm'],$all['remarque'],$all['genre'],$all['specialite'],
                                                         $all['adresse'],Auth::user()->id]);


    }

    public function scopeClient()
    {
        $values = DB::select('select * from personne where statut=? and user_id=?',['client',Auth::user()->id]);
        return $values;
    }
    public function scopeOpposant()
    {
        $values = DB::select('select * from personne where statut=? and user_id=?',['opposant',Auth::user()->id]);
        return $values;
    }

    public function scopeAvopposant()
    {
       $values =  DB::select('select * from avocat where user_id=?',[Auth::user()->id]);
        return $values;
    }

    public function scopeDossier()
    {
        $all = Input::all();

        DB::insert('insert into dossier(detail_tribunale,sujet,date_enregistrement,honoraire,num_dossier,
                                        nature_client,remarque,nom_tribunale,users_id,avocat_id,client_id,opposant_id)
                                        values(?,?,?,?,?,?,?,?,?,?,?,?)',[$all['detail_tribunal'],$all['sujet'],
                                        $all['date_enregistrement'],$all['honoraire'],$all['num'],$all['nature_client'],
                                        $all['remarque'],$all['tribunale'],Auth::user()->id,$all['avopposant'],
                                        $all['client'],$all['opposant']]);
    }

    public function scopeRecherche()
    {
        $client = Input::get('client');
        $num = Input::get('rechnum');

        if($num){
          $values =  DB::select('select * from dossier where num_dossier=? and users_id=?',[$num,Auth::user()->id]);
          $values['client'] = DB::select('select * from personne where id=?',[$values[0]->client_id]);
          $values['opposant'] = DB::select('select * from personne where id=?',[$values[0]->opposant_id]);
          $values['avocat'] = DB::select('select * from avocat where id=?',[$values[0]->avocat_id]);
          $values['tribunale'] = DB::select('select * from tribunale where nom=?',[$values[0]->nom_tribunale]);
        }elseif($client){
           $values = DB::select('select * from dossier where client_id=? and users_id=?',[$client,Auth::user()->id]);
           $values['client']= DB::select('select * from personne where id=?',[$client]);
           $values['opposant'] = DB::select('select * from personne where id=?',[$values[0]->opposant_id]);
           $values['avocat'] = DB::select('select * from avocat where id=?',[$values[0]->avocat_id]);
           $values['tribunale'] = DB::select('select * from tribunale where nom=?',[$values[0]->nom_tribunale]);
        }
        return $values;
    }

    public function scopeArchive()
    {
        $values = DB::select('select * from dossier where users_id=?',[Auth::user()->id]);
        dd($values);
        return$values;
    }
}