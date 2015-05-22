<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Input;
class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password','specialiter','adresse','gouvernerat','fax','mobile','fix','ncin'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];


    public function scopeDonnee(){
        $id = Auth::user()->id;
        $sp = [];
        $i=0;
        $values = DB::select('select * from users where id=?',[$id]);

        $id_sp = DB::select('select id_sp from avsp where id_user=?',[$id]);

        foreach($id_sp as $v){

            $sp[$i] = DB::select('select id,name from specialite where id=?',[$v->id_sp]);
            $i++;

        }

        $values['specialiter'] = $sp;

        return $values;
    }

    public function scopeModifier(){
        if(Input::get('name')){
            DB::update('update users set name=? where id=?',[Input::get('name'),Auth::user()->id]);
        }
        if(Input::get('ncin')){
            DB::update('update users set ncin=? where id=?',[Input::get('ncin'),Auth::user()->id]);
        }
        if(Input::get('adresse')){
            DB::update('update users set adresse=? where id=?',[Input::get('adresse'),Auth::user()->id]);
        }
        if(Input::get('gouvernerat')){
            DB::update('update users set gouvernerat=? where id=?',[Input::get('gouvernerat'),Auth::user()->id]);
        }
        if(Input::get('mobile')){
            DB::update('update users set mobile=? where id=?',[Input::get('mobile'),Auth::user()->id]);
        }
        if(Input::get('fix')){
            DB::update('update users set fix=? where id=?',[Input::get('fix'),Auth::user()->id]);
        }
        if(Input::get('fax')){
            DB::update('update users set fax=? where id=?',[Input::get('fax'),Auth::user()->id]);
        }
        if(Input::get('sexe')){
            DB::update('update users set sexe=? where id=?',[Input::get('sexe'),Auth::user()->id]);
        }

        if(Input::get('supsp')){
            DB::delete('delete from avsp where id_sp=?',[Input::get('supsp')]);
        }
        if(Input::get('specialiter')){
            $sp = Input::get('specialiter');
            foreach($sp as $v)
            {
                DB::insert('insert into avsp(id_user,id_sp) values(?,?)',[Auth::user()->id,$v]);
            }
        }
    }
}
