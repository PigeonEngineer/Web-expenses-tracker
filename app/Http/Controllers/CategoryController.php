<?php

namespace App\Http\Controllers;


use Redirect;
use App\Category;
use App\Users_category;
use App\Budget;
use Validator;
use Illuminate\Support\Facades\Input;
use View;
use Auth;
use Illuminate\Http\Request;
use Session;
use DB;
use App\Expense;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $user_id = Auth::user()->id;
      $categories = DB::table('categories')
      ->select('categories.id','categories.name')
      ->join('users_categorys', 'categories.id', 'users_categorys.categorys_id')
      ->where('users_categorys.users_id', '=', $user_id)
      ->get();
      return View::make("Category.index")->with("categories", $categories);
        //
    }
    public function __construct()
  {
      $this->middleware('auth');
  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make("Category.create");
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
          'name'       => 'required'
      );
      $validator = Validator::make(Input::all(), $rules);

      // process the login
      if ($validator->fails()) {
          return Redirect::to('Category/create')
              ->withErrors($validator);
              // ->withInput(Input::except('password'));
      } else {

          // Auth::user()->id
         $category = new Category;
         $category->name = Input::get('name');
         $category->save();

         $category_user = new Users_category;
         $category_user->users_id = Auth::user()->id;
         $category_user->categorys_id = $category->id;
         $category_user->save();

          // redirect
          Session::flash('message', 'Category added!');
          return Redirect::to("Category");
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $category = Category::find($id);
        $user_id = Auth::user()->id;
        $expenses = DB::table('expenses')
        // ->join('expenses', 'users_expenses.expenses_id', 'expenses.id')
        ->where('expenses.user_id', '=', $user_id)
        ->where('expenses.categorys_id', '=', $id )
        ->get();

        return View::make('Category.show')
          ->with("expenses", $expenses)
            ->with('Category', $category);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      $user_id = Auth::user()->id;
      // $categories = Category::pluck('name','id');
      // $expense = Expense::find($id);
      $users_categories = DB::table('users_categorys')
      ->select('categories.id')
      ->join('categories', 'categories.id', 'users_categorys.categorys_id')
      ->where('users_categorys.users_id', '=', $user_id)
      ->where('users_categorys.categorys_id', '=', $id)
      ->get();



      if($users_categories->contains('id',$id))
      {
        $category = Category::find($id);
          return View::make('Category.edit')->with('Category', $category);
      }
      else
      {
        return View::make('Unauthorized'
        );
      }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
      $rules = array(
          'name'       => 'required'
      );
      $validator = Validator::make(Input::all(), $rules);

      // process the login
      if ($validator->fails()) {
          return Redirect::to('Category/edit')
              ->withErrors($validator);
      } else {
          // store
          $category = Category::find($id);
          $category->name    = Input::get("name");
          $category->save();

          // redirect
          Session::flash('message', 'Category updated!');
          return Redirect::to('Category');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      $user_id = Auth::user()->id;

      $users_categories = DB::table('categories')
      ->select('categories.id')
      ->leftJoin('users_categorys', 'categories.id', 'users_categorys.categorys_id')
      ->where('users_categorys.users_id', '=', $user_id)
      ->where('users_categorys.categorys_id', '=', $id)
      ->get();


      if($users_categories->contains('id',$id))
      {
        $category = Category::find($id);
        $category->delete();

        // redirect
        Session::flash('message', 'Category deleted!');
        return Redirect::to('Category');
      }
      else
      {
        return View::make('Unauthorized'
        );
    // delete

  }
    }
}
