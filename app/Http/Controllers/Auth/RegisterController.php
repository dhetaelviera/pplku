<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    protected $username = 'username';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'alamat' => 'required|unique:users',
            'kecamatan' => 'required|unique:users',
            'kabupaten' => 'required|unique:users',
            'provinsi' => 'required|unique:users',
            'noTelepon' => 'required|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'sebagai' => 'required',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'alamat' => $data['alamat'],
            'kecamatan' => $data['kecamatan'],
            'kabupaten' => $data['kabupaten'],
            'provinsi' => $data['provinsi'],
            'noTelepon' => $data['noTelepon'],
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
            'sebagai' => $data['sebagai'],
            
        ]);
    }

    public function updateProfil(array $data){ 
        if ($request->oke) {
            DB::table('users')
            ->where('id', $request->id)
            ->update(['name' => $data['name'],
            'email' => $data['email'],
            'alamat' => $data['alamat'],      
            'username' => $data['username'],
            'password' => bcrypt($data['password']), 
            ]);
            $request->session()->flash('sukses','Berhasil Merubah Data');
            return redirect('profilAgen');

        }else{
            return redirect('profilAgen');
        }
}
}