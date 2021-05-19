<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\smodel;

class scontrol extends Controller
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
    public function stage(Request $request)
    {
        $this->validate($request,[
            'sid' => 'required|unique:App\Models\smodel,sid',
            'stype' => 'required',
            'sprice' => 'required|integer'
            
        ]);



        $getsid=request('sid');
        $getstype=request('stype');
        $getsprice=request('sprice');
        
        
   


        $user=new smodel();
        $user->sid= $getsid;
        $user->stype=$getstype;
        $user->sprice=$getsprice;
        
        

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
