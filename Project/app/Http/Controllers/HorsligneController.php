<?php namespace App\Http\Controllers;


function suiv($hh,$mm)
{
    if($mm==30)
    {$hh=$hh+1;
        $hh=(string)$hh;
        return $hh.'_00';}
    else
    {
        $hh=(string)$hh;
        return $hh.'_30';
    }
}



use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Input;
use App\Recherche;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HorsligneController extends Controller {


	public function getrecherche()
    {
        return view ('recherche');

    }
    public function postrecherche()
    {
        $name=\Input::get('name');
        $ville=\Input::get('ville');
        $sp=\Input::get('sp');

        $res=DB::select('select id,name,email,gouvernerat,adresse,mobile,fix,fax,ncin from users where (name like ?)and(gouvernerat like ?)',['%'.$name.'%','%'.$ville.'%']);
        $resultat=[];
        $i=0;
        if($sp)
        {
            foreach($res as $r)
            {
                $avsp=DB::select('select * from avsp where id_user=?',[$r->id]);
                foreach($avsp as $as)
                {
                    if ($as->id_sp==$sp)
                    {
                        $resultat[$i] = $r;
                        $i = $i + 1;
                    }
                }
            }
        }
        else
        {
            foreach($res as $r)
            {
                $resultat[$i]= $r;
                $i=$i+1;
            }
        }
        $spec=[[]];
        $i=0;
        foreach($resultat as $re) {

            $a = DB::select('select id_sp from avsp where id_user=?', [$re->id]);
            foreach ($a as $e)
            {
                $j=DB::select('select name from specialite where id=?',[$e->id_sp]);
                $spec[$re->id][$i]=$j[0]->name;
                $i=$i+1;
            }
        }
        return view('resultat')->withrech($resultat)->withspec($spec);
    }



    public function envoyer()
    {

        $all=\Input::all();
        if($all['mm'] < 9){
            $date= $all['jj'].'-0'.$all['mm'].'-'.$all['aaaa'];
        }else{
            $date= $all['jj'].'-'.$all['mm'].'-'.$all['aaaa'];
        }

        $heure='_'.$all['heure'].'_'.$all['minutes'].'_'.suiv($all['heure'],$all['minutes']);
        DB::insert('insert into rendezvous(name,ncin,sujet,heure,date,mobile,email,etat) values(?,?,?,?,?,?,?,?)',[$all['name'],$all['ncin'],$all['sujet'],$heure,$date,$all['mobile'],$all['email'],0]);
        $id=DB::getPdo()->lastInsertId();
        DB::insert('insert into calendrier values (?,?)',[$id,$all['id']]);
        return redirect('/');

    }

    public function creer_demande()
    {
        $id=\Input::get('id');
        return view('creer_demande')->withid($id);
    }
}
