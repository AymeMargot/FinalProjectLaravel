<?php

namespace App\Http\Controllers;

use App\accessory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class AccessoryController extends Controller
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
        $data['accessories'] = accessory::paginate(5);         
        return view('accessories.index',$data);
       
    }

    public function list()
    {
        $data['accessories'] = accessory::paginate(10);         
        return view('listAccessories',$data);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {      
        return view('accessories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {      
        $accessories = $request->except(['_token']);
        
        if($request->hasFile('Photo')){
            $accessories['Photo']=$request->file('Photo')->store('accessoriesUploads','public');
        }
        
        accessory::insert( $accessories);
        return redirect('accessories')->with('Mensaje','Accessory added successfuly');
 
        //return response()->json($accessories);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\accessory  $accessory
     * @return \Illuminate\Http\Response
     */
    public function show(accessory $accessory)
    {
        //
    }   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\accessory  $accessory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {     
        $accessories = accessory::findOrFail($id);
        return view('accessories.edit',compact('accessories'));
        
    }

    public function single($id)
    {     
        $accessories = accessory::findOrFail($id);
        return view('singleAccessory',compact('accessories'));
        
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\accessory  $accessory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $accessories = $request->except(['_token','_method']);

        if($request->hasFile('Photo')){

            $accessoriesfind = accessory::findOrFail($id);
            Storage::delete('public/'.$accessoriesfind->photo);

            $accessories['Photo']=$request->file('Photo')->store('accessoriesUploads','public');
        }

        accessory::where('id','=',$id)->update($accessories);
      //  $accessories = accessory::findOrFail($id);
      //    return view('accessories.edit',compact('accessories'));  
        return redirect('accessories')->with('Mensaje','Accessory updated successfuly');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\accessory  $accessory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $accessoriesfind = accessory::findOrFail($id);
        if(Storage::delete('public/'.$accessoriesfind->photo)){
            accessory::destroy($id);    
        }

      //  accessory::destroy($id);
          return redirect('accessories')->with('Mensaje','Accessory deletedc successfuly');
 
    }
}
