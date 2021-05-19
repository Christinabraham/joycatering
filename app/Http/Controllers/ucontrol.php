<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\uloginmodel;
use App\Models\smodel;
use App\Models\pmodel;
use App\Models\fmodel;
use App\Models\bmodel;




use Validator;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class ucontrol extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('userregister');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('login');
    }
    public function chome()
    {
        return view('commonhome');
    }
    public function ahome()
    {
        return view('adminhome');
    }
    public function cgallery()
    {
        return view('commongallery');
    }
    public function ccontact()
    {
        return view('commoncontact');
    }
    public function uhome()
    {
        $data=['loggeduserinfo'=>uloginmodel::where('username','=',session('username'))->first()];
        return view('userhome',$data);
    }
    public function ucontact()
    {
        return view('usercontact');
    }
    public function ugallery()
    {
        return view('usergallery');
    }
    public function uorder()
    {
        $event=pmodel::all()->toArray();
        $food=fmodel::all()->toArray();
        $stage=smodel::all()->toArray();
        return view('order',compact('event','food','stage'));
    }
   public function cview()
    {
        return view('commonview');
    }


    public function finalorders()
    {
        
        $orders =DB::table('bmodels')->where('uname',session('username'))->get();

        return view('final',compact('orders'));


        

    }




public function final(Request $request)
 {
    
    
    $event =DB::table('pmodels')->where('ename', request('ename'))->first();
    $food = DB::table('fmodels')->where('fname',request('fname'))->first();
   $stage = DB::table('smodels')->where('stype', request('stype'))->first();
   
$total=$event->eprice+$food->fprice+$stage->sprice;

$user=new bmodel();
$user->uname=session('username');
        $user->ename=request('ename');
        $user->fname=request('fname');
        $user->stype=request('stype');
        $user->total= $total;
       
$user->save();
return redirect('/uo')->with('success','order placed successfully');

 }


    public function logout()
    {
        if(session()->has('username'))
        {
            session()->pull('username');
            return redirect('/');
        }
        else
        {
            return redirect('/');  
        }

    }
    function odelete($id)
    {
        $delete=DB::table('bmodels')->where('id',$id)->delete();

        return redirect('/finalorders');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'name' => 'required',
            'username' => 'required|unique:App\Models\uloginmodel,username',
            'email' => 'required|email|unique:App\Models\uloginmodel,email',
            'phnno' => 'required|digits:10|unique:App\Models\uloginmodel,phnno',
            'ads' => 'required',
            'psw' => 'required|min:5',
            'cpsw' => 'required|same:psw'
        ]);



        $getname=request('name');
        $getusername=request('username');
        $getemail=request('email');
        $getphnno=request('phnno');
        $getads=request('ads');
        $getpsw=request('psw');
        $getcpsw=request('cpsw');
        


       


        $user=new uloginmodel();
        $user->name=$getname;
        $user->username=$getusername;
        $user->email=$getemail;
        $user->phnno= $getphnno;
        $user->ads=$getads;
        $user->psw= $getpsw;
        $user->cpsw=$getcpsw;
        

        $user->save();
        return view('login');
        
    }

    public function logs(Request $request)
    
    {
        

        $getusername=$request -> input('username');
        $getpsw=$request -> input('psw');
        $data = DB::select('select id from uloginmodels where username=? and psw=?',[$getusername,$getpsw]);

        if(count($data))
        {
            $dat= $request -> input();
            $request-> session()->put('username', $dat['username']);
            return view('userhome');
        }
        else if($getusername=='admin' && $getpsw=='admin')
        {
            $request-> session()->put('username','admin');
            return view('adminhome');
        }
        else
        {

            return back()->withInput();
        }

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

    
    public function booking()
    {
        $event=pmodel::all();
        $food=fmodel::all();
        $stage=smodel::all();
        //$data=['loggeduserinfo'=>AdminModel::where('username','=',session('loggeduser'))->first()];
        return view('booking',compact('event','food','stage'));
    }
    




}
