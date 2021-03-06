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

class BudgetManagementController extends Controller
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
        $budgets = Budget::all();
        return View::make("BudgetManagement.index")->with("budgets", $budgets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make("BudgetManagement.create");
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
          Session::flash('message', 'Budget created!');
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
        $budget = Budget::find($id);
        return View::make('BudgetManagement.show')
            ->with('Budget', $budget);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $budget = Budget::find($id);
        return View::make('BudgetManagement.edit')
            ->with('Budget', $budget);
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
            Session::flash('message', 'Budget updated!');
            return Redirect::to('BudgetManagement');
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
      // delete
      $Budget = Budget::find($id);
      $Budget->delete();

      // redirect
      Session::flash('message', 'Budget deleted!');
      return Redirect::to('Budget');
    }
}
