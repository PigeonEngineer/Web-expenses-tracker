<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use Redirect;
// use App\Budget;
use App\Category;
use App\Expense;
use App\Users_expense;
use App\User;
use Validator;
use Illuminate\Support\Facades\Input;
use View;
use Auth;
use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;
use Hash;

class UserManagementController extends Controller
{
  public function __construct()
{
    $this->middleware('auth');
    $this->middleware('App\Http\Middleware\AdminMiddleware');
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::all();
      return View::make("UserManagement.index")->with("users", $users);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return View::make("UserManagement.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $rules = array(
          'name'       => 'required',
          'email'      => 'required',
          'is_admin' => 'required|numeric'
      );
      $validator = Validator::make(Input::all(), $rules);

      // process the login
      if ($validator->fails()) {
          return Redirect::to('UserManagement/create')
              ->withErrors($validator);
      } else {
          // store
          $user = new User;
          $user->name       = Input::get('name');
          $user->email      = Input::get('email');
          $user->is_admin     = Input::get('is_admin');
          $user->password = Hash::make(Input::get('password'));
          // $user->create_at = Carbon::now()->toDateTimeString();
          // $user->user_id = Auth::user()->id;
          $user->save();
          // redirect
          Session::flash('message', 'User created!');
          return Redirect::to("User");
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $user = User::find($id);
      return View::make('UserManagement.show')
          ->with('User', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user = User::find($id);
      return View::make('UserManagement.edit')
          ->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = array(
            'name'       => 'required',
            'email'      => 'required',
            'is_admin' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('UserManagement/create')
                ->withErrors($validator);
        } else {
            // store
              $user = User::find($id);
            $user->name       = Input::get('name');
            $user->email      = Input::get('email');
            $user->is_admin     = Input::get('is_admin');
            $user->save();

            // redirect
            Session::flash('message', 'User updated!');
            return Redirect::to('UserManagement');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // delete
      $user = User::find($id);
      $user->delete();

      // redirect
      Session::flash('message', 'User deleted!');
      return Redirect::to('UserManagement');
    }
}
