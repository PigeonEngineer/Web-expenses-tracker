<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Expense;
use App\Users_expense;
use APP\Users_category;
use App \Category;
use DB;
class AddController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getAdd () {
      $userId = Auth::id();
      $userName = User::find($userId)->name;
      $userCategorys = DB::table('users_categorys')
      -> join ('categorys', 'users_categorys.categorys_id', '=', 'categorys.id')
      -> where ('users_categorys.users_id', '=', $userId)
      ->get();

      $User_expenses = DB::table('expenses')
                -> join ('users_expenses', 'expenses.id' ,'=','users_expenses.expenses_id')
                -> join ('users', 'users.id', '=', 'users_expenses.users_id')
                -> join ('categorys', 'expenses.categorys_id', '=', 'categorys.id')
                -> where ('users.id', '=', $userId)
                ->get();


      $User_expenses = $User_expenses->groupBy('categorys_id');
       $data = [
          'username'  => $userName,
          'userId' => $userId,
          'users_expenses' =>$User_expenses,
          'users_categories' => $userCategorys
];
        return view('add')->with($data);
}
}



