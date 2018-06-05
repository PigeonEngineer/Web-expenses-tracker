<?php

namespace App\Http\Controllers;

use App\Categorys_budget;
use Illuminate\Http\Request;

class Categorys_budgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
     * @param  \App\Categorys_budget  $categorys_budget
     * @return \Illuminate\Http\Response
     */
    public function show(Categorys_budget $categorys_budget)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categorys_budget  $categorys_budget
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorys_budget $categorys_budget)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categorys_budget  $categorys_budget
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorys_budget $categorys_budget)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categorys_budget  $categorys_budget
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorys_budget $categorys_budget)
    {
        //
    }
}
