<?php
/**
 * Simple helper to debug to the console
 *
 * @param $data object, array, string $data
 * @param $context string  Optional a description.
 *
 * @return string
 */
namespace App\Http\Controllers;
use Redirect;
// use App\Budget;
use App\Category;
use App\Expense;
use Validator;
use Illuminate\Support\Facades\Input;
use View;
use Auth;
use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $expenses = Expense::all();
      return View::make("Expense.index")->with("expenses", $expenses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categories =Category::all();
        $categories = Category::pluck('name','id');
        return View::make("Expense.create",compact('categories', $categories));
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
          'categories'       => 'required',
          'comments'      => 'required',
          'amount' => 'required|numeric'
      );
      $validator = Validator::make(Input::all(), $rules);

      // process the login
      if ($validator->fails()) {
          return Redirect::to('Expense/create')
              ->withErrors($validator);
      } else {
          // store
          $expenses = new Expense;
          $expenses->amount       = Input::get('amount');
          $expenses->categorys_id      = Input::get('categories');
          $expenses->comments     = Input::get('comments');
          $expenses->creationTimeStamp = Carbon::now()->toDateTimeString();
          $expenses->save();

          // redirect
          Session::flash('message', 'Successfully created Expenses!');
          return Redirect::to("Expense");
      }
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $expense = Expense::find($id);
      $category = Category::find($expense->categorys_id);
      return View::make('Expense.show')
          ->with('category', $category->name)
          ->with('Expense', $expense);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $categories = Category::pluck('name','id');
      $expense = Expense::find($id);
      return View::make('Expense.edit', compact('categories', $categories))
          ->with('Expense', $expense);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
        // validate
          // read more on validation at http://laravel.com/docs/validation
          $rules = array(
              'categories'       => 'required',
              'comments'      => 'required',
              'amount' => 'required|numeric'
          );
          $validator = Validator::make(Input::all(), $rules);

          // process the login
          if ($validator->fails()) {
              return Redirect::to('Expense/create')
                  ->withErrors($validator);
          } else {
              // store
              $Expense = Expense::find($id);
              $Expense->amount    = Input::get('amount');
              $Expense->creationTimeStamp = Input::get('ToDateTime');
              $Expense->comments = Input::get('comments');
              $Expense->categorys_id = Input::get('categories');
              $Expense->save();
              $input = Input::all();

              // redirect
              Session::flash('message', 'Successfully updated Expense!');
              return Redirect::to('Expense');
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // delete
      $Expense = Expense::find($id);
      $Expense->delete();

      // redirect
      Session::flash('message', 'Successfully deleted the expense!');
      return Redirect::to('Expense');
    }
}
