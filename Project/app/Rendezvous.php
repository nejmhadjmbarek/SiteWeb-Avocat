<?php namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Input;
class Rendezvous extends Model{

    public function scopeDmd(){
        $id_user = Auth::user()->id;
        $val = DB::select('select id_rendezvous from calendrier where id_users =? ', array($id_user));
        $D = [0];
        foreach ($val as $v){
             if(DB::select('select * from rendezvous where id =? and etat=?', array($v->id_rendezvous,0))){
                 $D[0]++;
             }
        }
        return $D;
    }

    public function scopeRefuser(){
        $id=\Input::get('id');
        DB::delete('delete from calendrier where id_rendezvous=?',[$id]);
        DB::delete('delete from rendezvous where id=?',[$id]);
    }

    public function scopeAccepter(){
        $id=\Input::get('id');
        DB::update('update rendezvous set etat=? where id=?',[1,$id]);
    }

}