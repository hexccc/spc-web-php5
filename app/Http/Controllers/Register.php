<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
use Illuminate\Support\Facades\DB;

class Register extends Controller
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
				$fname = $request->input('fname');
				$lname = $request->input('lname');
				$email = $request->input('email');
				$address = $request->input('address');
				$city = $request->input('city');
				$state = $request->input('state');
				$zip = $request->input('zip');
				$business = $request->input('gridRadios');
				DB::insert("INSERT INTO `clients`(`fname`,`lname`,`email`,`address`,`city`,`province`,`zip_code`,`business_type`)VALUES(?,?,?,?,?,?,?,?)", [$fname,$lname,$email,$address,$city,$state,$zip,$business]);
				return redirect('/form');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
