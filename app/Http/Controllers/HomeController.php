<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Expense;
use App\Users_expense;
use App \Category;
use DB;

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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // get user id
      $userId = Auth::id();
      $userName = User::find($userId)->name;


      $User_expenses = DB::table('expenses')
                -> join ('users_expenses', 'expenses.id' ,'=','users_expenses.expenses_id')
                -> join ('users', 'users.id', '=', 'users_expenses.users_id')
                -> join ('categorys', 'expenses.categorys_id', '=', 'categorys.id')
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
       $data = [
          'username'  => $userName,
          'userId' => $userId,
          'users_expenses' =>$User_expenses
];
      // $this->set('test',  $test);
        return view('home')->with($data);
    }
}
