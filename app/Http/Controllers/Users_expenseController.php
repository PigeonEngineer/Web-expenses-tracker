<?php

namespace App\Http\Controllers;

use App\Users_expense;
use Illuminate\Http\Request;

class Users_expenseController extends Controller
{
  public function __construct()
{
    $this->middleware('auth');
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Users_expense  $users_expense
     * @return \Illuminate\Http\Response
     */
    public function show(Users_expense $users_expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Users_expense  $users_expense
     * @return \Illuminate\Http\Response
     */
    public function edit(Users_expense $users_expense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Users_expense  $users_expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Users_expense $users_expense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Users_expense  $users_expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users_expense $users_expense)
    {
        //
    }
}
