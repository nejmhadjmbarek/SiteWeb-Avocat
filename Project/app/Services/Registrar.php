<?php namespace App\Services;

use App\Avsp;
use Illuminate\Support\Facades\DB;
use App\Specialite;
use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
            'gouvernerat' => 'required|max:255',
            'adresse'     => 'required|max:255',
            'mobile'=> 'max:8',
            'fix'=>'max:8',
            'fax'=>'max:8'

		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{


	$user =User::create([
			'name' => $data['name'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
            'gouvernerat'=>$data['gouvernerat'],
            'adresse'=>$data['adresse'],
            'mobile'=>$data['mobile'],
            'fix'=>$data['fix'],
            'fax'=>$data['fax'],
            'ncin'=>$data['ncin'],
            'sexe' => $data['sexe']

		]);

       $id_user = DB::getPdo()->lastInsertId();
        foreach($data as  $sp)
        {
            if(is_array($sp))
            {
                foreach($sp as $v)
                {

                    DB::insert('insert into avsp(id_user,id_sp) values(?,?)',[$id_user,$v]);
                }

            }
        }
        return $user;
	}

}
