<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fmodel;

class fcontrol extends Controller
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
    public function food(Request $request)
    {
        $this->validate($request,[
            'fid' => 'required|unique:App\Models\fmodel,fid',
            'fname' => 'required',
            'fprice' => 'required'
            
        ]);



        $getfid=request('fid');
        $getfname=request('fname');
        $getfprice=request('fprice');
        
        
   


        $user=new fmodel();
        $user->fid= $getfid;
        $user->fname=$getfname;
        $user->fprice=$getfprice;
        
        

        $user->save();
        return redirect('/ai');

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
