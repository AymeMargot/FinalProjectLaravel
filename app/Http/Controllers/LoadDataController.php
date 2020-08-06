<?php

namespace App\Http\Controllers;

use App\loadData;
use App\Role;
use App\Setting;
use App\Supply;
use App\User;
use App\Vehicle_type;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use LengthException;

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

        $data = [];
       /* for($i = 0;$i < 50; $i++){
            $name = Str::random(30);
            $data[]=[
                'name'=> $name,
                'price'=> rand(11,350),
                'stock'=> rand(100,500),
                'offer'=> 'NO',
                'photo'=> '',
                'created_at'=>now()->toDateTimeString(),
                'updated_at'=>now()->toDateTimeString(),
                'user_id' =>1
            ];
        }

        foreach($data as $dat){
            Supply::insert($dat);
        }
        */
        $array = ['Motorbikes','Car','Van','Small Buses','Others'];
        for($i = 0;$i < count($array) ; $i++){
            $name = $array[$i];
            $data[]=[
                'name'=> $name,             
                'created_at'=>now()->toDateTimeString(),
                'updated_at'=>now()->toDateTimeString(),
                'user_id' =>1
            ];
        }

        foreach($data as $dat){
            Vehicle_type::insert($dat);
        }
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
