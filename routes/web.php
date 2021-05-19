<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ucontrol; 
use App\Http\Controllers\pcontrol; 
use App\Http\Controllers\fcontrol;
use App\Http\Controllers\scontrol; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::post('/login',[ucontrol::class,'store']);
Route::post('/logs',[ucontrol::class,'logs']);









   
    
    



Route::post('/ap',[pcontrol::class,'event']);


Route::post('/af',[fcontrol::class,'food']);
Route::post('/as',[scontrol::class,'stage']);

Route::post('/upevent',[pcontrol::class,'upevent']);
Route::post('/upfood',[pcontrol::class,'upfood']);
Route::post('/upstage',[pcontrol::class,'upstage']);



Route::get('/odelete/{id}',[ucontrol::class,'odelete']);


Route::post('/final',[ucontrol::class,'final']);

Route::get('/logout',[ucontrol::class,'logout']);
Route::get('/editevent/{id}',[pcontrol::class , 'editevent' ] );
        Route::get('/editfood/{id}',[pcontrol::class , 'editfood' ] );
        Route::get('/editstage/{id}',[pcontrol::class , 'editstage' ] );
        Route::get('/deleteevent/{eid}',[pcontrol::class , 'deleteevent' ] );
        Route::get('/deletefood/{fid}',[pcontrol::class , 'deletefood' ] );
        Route::get('/deletestage/{sid}',[pcontrol::class , 'deletestage' ] );


Route::group(['middleware'=>['AuthCheck']],function(){


    Route::get('/cc',[ucontrol::class , 'ccontact' ] );
    Route::get('/cg',[ucontrol::class , 'cgallery' ] );
    Route::get('/cv',[ucontrol::class , 'cview' ] );
    Route::get('/',[ucontrol::class , 'chome' ] );
    Route::get('/l',[ucontrol::class , 'create' ] );
        Route::get('reg',[ucontrol::class , 'index' ] );
       
        Route::get('/uh',[ucontrol::class , 'uhome' ] );
        Route::get('/uc',[ucontrol::class , 'ucontact' ] );
        Route::get('/ug',[ucontrol::class , 'ugallery' ] );
        Route::get('/ah',[ucontrol::class , 'ahome' ] );
        Route::get('/ai',[pcontrol::class , 'create' ] );
        Route::get('/userview',[pcontrol::class , 'usrview' ] );
        
        Route::get('/ub',[ucontrol::class , 'booking' ] );
        Route::get('/uo',[ucontrol::class , 'uorder' ] );
        Route::get('/finalorders',[ucontrol::class , 'finalorders' ] );

       
        

});