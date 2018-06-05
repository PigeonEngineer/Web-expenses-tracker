<?php

namespace App\Http\Controllers;
use Redirect;
use App\Budget;
use Validator;
use Illuminate\Support\Facades\Input;
use View;
use Auth;
use Illuminate\Http\Request;
use Session;
use DB;

class BudgetController extends Controller
{
  public function __construct()
{
    $this->middleware('auth');
    // $this->middleware('App\Http\Middleware\AdminMiddleware');
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $budgets = DB::table('budgets')
        ->select('budgets.id', 'budgets.fromDateTime', 'budgets.ToDateTime', 'budgets.amount')
        ->join('categorys_budgets' , 'budgets.id', 'categorys_budgets.budgets_id' )
        ->join('categories', 'categorys_budgets.categorys_id','categories.id' )
        ->join('users_categorys', 'categories.id', 'users_categorys.categorys_id')
        ->where('users_categorys.users_id', '=', $user_id)
        ->get();



        return View::make("Budget.index")->with("budgets", $budgets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make("Budget.create");
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
          'fromDateTime'       => 'required',
          'ToDateTime'      => 'required',
          'amount' => 'required|numeric'
      );
      $validator = Validator::make(Input::all(), $rules);

      // process the login
      if ($validator->fails()) {
          return Redirect::to('Budget/create')
              ->withErrors($validator);
              // ->withInput(Input::except('password'));
      } else {
          // store
          $budget = new Budget;
          $budget->amount       = Input::get('amount');
          $budget->fromDateTime      = Input::get('fromDateTime');
          $budget->ToDateTime = Input::get('ToDateTime');
          $budget->save();

          // redirect
          Session::flash('message', 'Successfully created Budget!');
          return Redirect::to("Budget");
      }
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $user_id = Auth::user()->id;
      $user_budgets = DB::table('budgets')
      ->select('budgets.id')
      ->join('categorys_budgets' , 'budgets.id', 'categorys_budgets.budgets_id' )
      ->join('categories', 'categorys_budgets.categorys_id','categories.id' )
      ->join('users_categorys', 'categories.id', 'users_categorys.categorys_id')
      ->where('users_categorys.users_id', '=', $user_id)
      ->get();


      if($user_budgets->contains('id',$id))
      {
        $budget = Budget::find($id);
        return View::make('Budget.show')
            ->with('Budget', $budget);
      }
      else
      {
        return View::make('Unauthorized'
        );

    }
  }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user_id = Auth::user()->id;
      $user_budgets = DB::table('budgets')
      ->select('budgets.id')
      ->join('categorys_budgets' , 'budgets.id', 'categorys_budgets.budgets_id' )
      ->join('categories', 'categorys_budgets.categorys_id','categories.id' )
      ->join('users_categorys', 'categories.id', 'users_categorys.categorys_id')
      ->where('users_categorys.users_id', '=', $user_id)
      ->get();

      if($user_budgets->contains('id',$id))
      {
        $budget = Budget::find($id);
        return View::make('Budget.edit')
            ->with('Budget', $budget);
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
     * @param  \App\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
      // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'fromDateTime'       => 'required',
            'ToDateTime'      => 'required',
            'amount' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('Budget/create')
                ->withErrors($validator);
                // ->withInput(Input::except('password'));
        } else {
            // store
            $Budget = Budget::find($id);
            $Budget->amount    = Input::get('amount');
            $Budget->fromDateTime = Input::get('fromDateTime');
            $Budget->ToDateTime = Input::get('ToDateTime');
            $Budget->save();

            // redirect
            Session::flash('message', 'Successfully updated budget!');
            return Redirect::to('Budget');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user_id = Auth::user()->id;
      $user_budgets = DB::table('budgets')
      ->select('budgets.id')
      ->join('categorys_budgets' , 'budgets.id', 'categorys_budgets.budgets_id' )
      ->join('categories', 'categorys_budgets.categorys_id','categories.id' )
      ->join('users_categorys', 'categories.id', 'users_categorys.categorys_id')
      ->where('users_categorys.users_id', '=', $user_id)
      ->get();

      if($user_budgets->contains('id',$id))
      {
        $Budget = Budget::find($id);
        $Budget->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the budget!');
        return Redirect::to('Budget');
      }
      else
      {
        return View::make('Unauthorized'
        );
      // delete

    }
  }
}
