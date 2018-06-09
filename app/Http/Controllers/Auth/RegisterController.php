<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Users_category;
use DB;
use Redirect;

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
    protected $redirectTo = '/';

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
            'password' => 'required|string|min:6|confirmed',
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
    $isAdmin = False;
        // Adding four defaults for the user.
         // yes, it's ugly.
         //
         // $user = new User;
         // $user->name = $data['name'];
         // $user->email = $data['email'];
         // $user->password = Hash::make($data['password']);
         // $user->is_admin = $isAdmin;
         // $user->save();

          $user = User::create([
             'name' => $data['name'],
             'email' => $data['email'],
             'password' => Hash::make($data['password']),
             'is_admin' => $isAdmin,
         ]);

         $id = $user->id;


         $user_category1 = new Users_category;
         $user_category1->users_id       = $id;
         $user_category1->categorys_id      = 1;
         $user_category1->save();

         $user_category2 = new Users_category;
         $user_category2->users_id       = $id;
         $user_category2->categorys_id      = 2;
         $user_category2->save();

         $user_category3 = new Users_category;
         $user_category3->users_id       = $id;
         $user_category3->categorys_id      = 3;
         $user_category3->save();

         $user_category4 = new Users_category;
         $user_category4->users_id       = $id;
         $user_category4->categorys_id      = 4;
         $user_category4->save();




         return $user;
        // return Redirect::to('/');
        // User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        //     'is_admin' => $isAdmin,
        // ]);
    }
}
