<?php namespace App;
use Auth;
use DB;
use Illuminate\Database\Eloquent\Model;

class Calendrier extends Model {

    public function scopeJour(){

        $values = [
            '_8_00_8_30' => '0',
            '_8_30_9_00' => '0',
            '_9_00_9_30' => '0',
            '_9_30_10_00' => '0',
            '_10_00_10_30' => '0',
            '_10_30_11_00' => '0',
            '_11_00_11_30' => '0',
            '_11_30_12_00' => '0',
            '_14_00_14_30' => '0',
            '_14_30_15_00' => '0',
            '_15_00_15_30' => '0',
            '_15_30_16_00' => '0',
            '_16_00_16_30' => '0',
            '_16_30_17_00' => '0',
            '_17_00_17_30' => '0',
            '_17_30_18_00' => '0',
        ];
        $id_user = Auth::user()->id;
        $val = DB::select('select id_rendezvous from calendrier where id_users =? ', array($id_user));

        $date = date('Y-m-d');

        foreach ($val as  $v) {
            $heur = DB::select('select * from rendezvous where id =? and date=? and etat=?', array($v->id_rendezvous,$date,1));
            foreach ($heur as  $va){
                $values[$va->heure] = $heur;
            }

        }

        return $values;
    }

    public function scopeSemaine(){

        $values = [
            'Mon' => [
                '_8_00_8_30' => '0',
                '_8_30_9_00' => '0',
                '_9_00_9_30' => '0',
                '_9_30_10_00' => '0',
                '_10_00_10_30' => '0',
                '_10_30_11_00' => '0',
                '_11_00_11_30' => '0',
                '_11_30_12_00' => '0',
                '_14_00_14_30' => '0',
                '_14_30_15_00' => '0',
                '_15_00_15_30' => '0',
                '_15_30_16_00' => '0',
                '_16_00_16_30' => '0',
                '_16_30_17_00' => '0',
                '_17_00_17_30' => '0',
                '_17_30_18_00' => '0',
            ],
            'Tue' => [
                '_8_00_8_30' => '0',
                '_8_30_9_00' => '0',
                '_9_00_9_30' => '0',
                '_9_30_10_00' => '0',
                '_10_00_10_30' => '0',
                '_10_30_11_00' => '0',
                '_11_00_11_30' => '0',
                '_11_30_12_00' => '0',
                '_14_00_14_30' => '0',
                '_14_30_15_00' => '0',
                '_15_00_15_30' => '0',
                '_15_30_16_00' => '0',
                '_16_00_16_30' => '0',
                '_16_30_17_00' => '0',
                '_17_00_17_30' => '0',
                '_17_30_18_00' => '0',
            ],
            'Wed' => [
                '_8_00_8_30' => '0',
                '_8_30_9_00' => '0',
                '_9_00_9_30' => '0',
                '_9_30_10_00' => '0',
                '_10_00_10_30' => '0',
                '_10_30_11_00' => '0',
                '_11_00_11_30' => '0',
                '_11_30_12_00' => '0',
                '_14_00_14_30' => '0',
                '_14_30_15_00' => '0',
                '_15_00_15_30' => '0',
                '_15_30_16_00' => '0',
                '_16_00_16_30' => '0',
                '_16_30_17_00' => '0',
                '_17_00_17_30' => '0',
                '_17_30_18_00' => '0',
            ],
            'Thu' => [
                '_8_00_8_30' => '0',
                '_8_30_9_00' => '0',
                '_9_00_9_30' => '0',
                '_9_30_10_00' => '0',
                '_10_00_10_30' => '0',
                '_10_30_11_00' => '0',
                '_11_00_11_30' => '0',
                '_11_30_12_00' => '0',
                '_14_00_14_30' => '0',
                '_14_30_15_00' => '0',
                '_15_00_15_30' => '0',
                '_15_30_16_00' => '0',
                '_16_00_16_30' => '0',
                '_16_30_17_00' => '0',
                '_17_00_17_30' => '0',
                '_17_30_18_00' => '0',
            ],
            'Fri' => [
                '_8_00_8_30' => '0',
                '_8_30_9_00' => '0',
                '_9_00_9_30' => '0',
                '_9_30_10_00' => '0',
                '_10_00_10_30' => '0',
                '_10_30_11_00' => '0',
                '_11_00_11_30' => '0',
                '_11_30_12_00' => '0',
                '_14_00_14_30' => '0',
                '_14_30_15_00' => '0',
                '_15_00_15_30' => '0',
                '_15_30_16_00' => '0',
                '_16_00_16_30' => '0',
                '_16_30_17_00' => '0',
                '_17_00_17_30' => '0',
                '_17_30_18_00' => '0',
            ],
            'Sat' => [
                '_8_00_8_30' => '0',
                '_8_30_9_00' => '0',
                '_9_00_9_30' => '0',
                '_9_30_10_00' => '0',
                '_10_00_10_30' => '0',
                '_10_30_11_00' => '0',
                '_11_00_11_30' => '0',
                '_11_30_12_00' => '0',
                '_14_00_14_30' => '0',
                '_14_30_15_00' => '0',
                '_15_00_15_30' => '0',
                '_15_30_16_00' => '0',
                '_16_00_16_30' => '0',
                '_16_30_17_00' => '0',
                '_17_00_17_30' => '0',
                '_17_30_18_00' => '0',
            ],
            'Sun' => [
                '_8_00_8_30' => '0',
                '_8_30_9_00' => '0',
                '_9_00_9_30' => '0',
                '_9_30_10_00' => '0',
                '_10_00_10_30' => '0',
                '_10_30_11_00' => '0',
                '_11_00_11_30' => '0',
                '_11_30_12_00' => '0',
                '_14_00_14_30' => '0',
                '_14_30_15_00' => '0',
                '_15_00_15_30' => '0',
                '_15_30_16_00' => '0',
                '_16_00_16_30' => '0',
                '_16_30_17_00' => '0',
                '_17_00_17_30' => '0',
                '_17_30_18_00' => '0',
            ]
        ];
        $id_user = Auth::user()->id;
        $val = DB::select('select id_rendezvous from calendrier where id_users =? ', array($id_user));

        foreach ($val as  $v){
            $dt = DB::select('select date,id from rendezvous where id=? and etat=?', array($v->id_rendezvous,1));

            foreach ($dt as  $va){

                if(date('W',strtotime($va->date)) == date('W')){

                    $heur = DB::select('select heure from rendezvous where id=?', array($va->id));
                    foreach ($heur as  $vs){
                        $values[date('D', strtotime($va->date))][$vs->heure] = '1';
                    }
                }
            }

        }

        return $values;
    }

    public function scopeDmd()
    {
        $ida = Auth::user()->id;
        $idm=[];
        $var1 = DB::table('calendrier')->get();
        $i = 0;
        foreach ($var1 as $v1) {
            if ($v1->id_users == $ida) {
                $idm[$i] = $v1->id_rendezvous;
                $i = $i + 1;
            }
        }

        $var2 = DB::table('rendezvous')->get();
        $i = 0;
        $idm2 = [0];
        foreach ($var2 as $v2) {
            if ((in_array($v2->id, $idm)) and ($v2->etat == 0)) {
                $idm2[$i] = $v2;
                $i = $i + 1;
            }
        }

        return $idm2;
    }

}
