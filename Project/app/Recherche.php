<?php namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Recherche extends Model
{
    public function scopeRecherche($name,$ville,$sp)
    {
        $res=DB::table('users')->select('name','email')->where('name',$name)->get();

        return $res;
    }

}

?>