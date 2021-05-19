<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pmodel;
use App\Models\fmodel;
use App\Models\smodel;
use DB;
class pcontrol extends Controller
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
        return view('alteritem');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function event(Request $request)
    {
        $this->validate($request,[
            'eid' => 'required|unique:App\Models\pmodel,eid',
            'ename' => 'required',
            'eprice' => 'required'
            
        ]);



        $geteid=request('eid');
        $getename=request('ename');
        $geteprice=request('eprice');
        
        
   


        $user=new pmodel();
        $user->eid= $geteid;
        $user->ename=$getename;
        $user->eprice=$geteprice;
        
        

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
    function edit($id)
    {
        $row=DB::table('menumodels')->where('id',$id)->first();
        $data=['info'=>$row];
        return view('menuedit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function upevent(Request $request)
    {
        $updating=DB::table('pmodels')->where('id',$request->input('id'))->update([
            'eid'=>$request->input('eid'),
            'ename'=>$request->input('ename'),
            'eprice'=>$request->input('eprice')
        ]);

        return redirect('/userview');
    }
    public function upfood(Request $request)
    {
        $updating=DB::table('fmodels')->where('id',$request->input('id'))->update([
            'fid'=>$request->input('fid'),
            'fname'=>$request->input('fname'),
            'fprice'=>$request->input('fprice')
        ]);

        return redirect('/userview');
    }
    public function upstage(Request $request)
    {
        $updating=DB::table('fmodels')->where('id',$request->input('id'))->update([
            'sid'=>$request->input('sid'),
            'stype'=>$request->input('stype'),
            'sprice'=>$request->input('sprice')
        ]);

        return redirect('/userview');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editevent($id)
    {
        $row=DB::table('pmodels')->where('id',$id)->first();
        $data=['info'=>$row];
        return view('editevent',$data);
    }
    public function editfood($id)
    {
        $row=DB::table('fmodels')->where('id',$id)->first();
        $data=['info'=>$row];
        return view('editfood',$data);
    }
    public function editstage($id)
    {
        $row=DB::table('smodels')->where('id',$id)->first();
        $data=['info'=>$row];
        return view('editstage',$data);
    }
    public function usrview()
 {
     $event=pmodel::all();
     $food=fmodel::all();
     $stage=smodel::all();
     //$data=['loggeduserinfo'=>AdminModel::where('username','=',session('loggeduser'))->first()];
     return view('apview',compact('event','food','stage'));
 }


 function deleteevent($eid)
    {
        $delete=DB::table('pmodels')->where('eid',$eid)->delete();

        return redirect('/userview');
    }
    function deletefood($fid)
    {
        $delete=DB::table('fmodels')->where('fid',$fid)->delete();

        return redirect('/userview');
    }
    function deletestage($sid)
    {
        $delete=DB::table('smodels')->where('sid',$sid)->delete();

        return redirect('/userview');
    }

 
 }

