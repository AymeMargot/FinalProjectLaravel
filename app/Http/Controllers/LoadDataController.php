<?php

namespace App\Http\Controllers;

use App\loadData;
use App\Role;
use App\Setting;
use App\User;
use DateTime;
use Illuminate\Http\Request;

class LoadDataController extends Controller
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

    public function load(){


     //   $users = collect(User::all()->modelKeys());
        $settings = [
            'name' => 'assistant'                         
        ];
        
        if(Role::insert($settings))
            echo "insert successfully";
        

        User::find(1)->assignRole(1);
        return view('load_data.index',$settings);
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
     * @param  \App\loadData  $loadData
     * @return \Illuminate\Http\Response
     */
    public function show(loadData $loadData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\loadData  $loadData
     * @return \Illuminate\Http\Response
     */
    public function edit(loadData $loadData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\loadData  $loadData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, loadData $loadData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\loadData  $loadData
     * @return \Illuminate\Http\Response
     */
    public function destroy(loadData $loadData)
    {
        //
    }
}
