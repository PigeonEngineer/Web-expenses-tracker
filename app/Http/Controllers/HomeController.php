<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Expense;
use App\Users_expense;
use APP\Users_category;
use App \Category;
use DB;
use App;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('language_presist');
        // $this->middleware('App\Http\Middleware\language_presist');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */



     public function index()
    {

        // App::setLocale(Session::get('applocale'));
      // get user id
      $userId = Auth::id();
      $userName = User::find($userId)->name;
      // $userCategorys = Users_category::find($userId);
      $userCategorys = DB::table('users_categorys')
      -> join ('categories', 'users_categorys.categorys_id', '=', 'categories.id')
      -> where ('users_categorys.users_id', '=', $userId)
      ->get();

      $User_expenses = DB::table('expenses')
                // -> join ('users_expenses', 'expenses.id' ,'=','users_expenses.expenses_id')
                -> join ('users', 'users.id', '=', 'expenses.user_id')
                -> join ('categories', 'expenses.categorys_id', '=', 'categories.id')
                -> where ('users.id', '=', $userId)
                ->get();


      // $categories=array();
      //     foreach ($User_expenses as $user_expense) {
      //         $categories[$user_expense[0]][] = $user_expense[1];
      //       }
      $User_expenses = $User_expenses->groupBy('categorys_id');

      // foreach ($User_expenses as $categories)
      // {
      //
      //   $category_name = DB::select(DB::raw('select name from categorys
      //            where id = '. $categories->first()->categorys_id.';' ));
      //
      //     // $categories->push($category_name);
      //     $categories->prepend(['category_name' => $category_name]);
      // }

      // $User_expenses = $User_expenses->groupBy('name');
      // dd($userCategorys);
       $data = [
          'username'  => $userName,
          'userId' => $userId,
          'users_expenses' =>$User_expenses,
          'users_categories' => $userCategorys
];
      // $this->set('test',  $test);
        return view('home')->with($data);


    }
}
