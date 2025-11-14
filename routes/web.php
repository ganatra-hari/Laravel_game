<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\c1;
use App\Http\Controllers\admincontrol;
use App\Http\Controllers\gamecontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::View('home','index');
Route::View('con','contact');
Route::View('pro','product-details');
Route::View('shop','shop');
Route::View('con','contact');

// Action Pages
Route::View('gta5','action.gta5');
Route::View('sekiro','action.sekiro');
Route::View('rdr','action.rdr');
Route::View('pal','action.pal');
Route::View('re4','action.re4');
Route::View('fh5','action.fh5');
Route::View('rdd','action.rdd');
Route::View('pal','action.pal');
Route::View('bmw','action.bmw');
Route::View('cp','action.cp');
Route::View('jf','action.jf');
Route::View('uc4','action.uc4');
Route::View('dbh','action.dbh');
Route::View('got','action.got');
Route::View('sm','action.sm');
Route::View('sh2','action.sh2');
Route::View('fc3','action.fc3');
Route::View('sifu','action.sifu');
Route::View('gow','action.gow');

// User

Route::View('update_u','update_u');
Route::View('signup','signup');
Route::View('login','login');
Route::post('signup',[c1::class,'adddata']);  
Route::View('userlist','userlist');

Route::get('userlist',[c1::class,'getdata']);   

Route::get('delete_u/{id}',[c1::class,'delete_u']);



Route::get('update_u/{id}',[c1::class,'u_update']);

Route::post('/update_u',[c1::class,'u_update']);


Route::post('search_user',[c1::class,'search_email']);

Route::post('userlist',[c1::class,'paginate_search']);

Route::get('login',[c1::class,'login']);

Route::post('login_process',[c1::class,'loginprocess']);

Route::get('logout',[c1::class,'logout']);

// Admin
Route::View('a_signup','a_signup');
Route::View('adminlist','adminlist');
Route::View('a_login','a_login');
Route::View('a_update','a_update');

Route::post('a_signup',[admincontrol::class,'add_data']); 



Route::get('adminlist',[admincontrol::class,'get_data']);  

Route::get('delete_a/{id}',[admincontrol::class,'delete_a']);

Route::view('a_login',[admincontrol::class,'a_login']);

Route::post('admin_loginprocess',[admincontrol::class,'admin_loginprocess']);

// Edit


Route::get('/a_update/{id}',[admincontrol::class,'admin_update']);

Route::patch('/a_update/{id}', [admincontrol::class, 'a_update']);

// Search

Route::post('search_admin',[admincontrol::class,'search_name']);

Route::post('adminlist',[admincontrol::class,'paginate_search']);



// Game


Route::View('addgame','addgame');
Route::View('gamelist','gamelist');
Route::View('gameedit','gameedit');

Route::post('addgame',[gamecontroller::class,'addgame']); 

Route::get('shop',[gamecontroller::class,'get_game']);  

Route::get('gamelist',[gamecontroller::class,'gamelist']);  

Route::get('delete_g/{id}',[gamecontroller::class,'delete_g']);


Route::post('search',[gamecontroller::class,'search_game']);

Route::post('gamelist',[gamecontroller::class,'paginate_search']);


Route::View('gameuser','gameuser');

Route::post('searchgame_user',[gamecontroller::class,'search_game_user']);

Route::post('gameuser',[gamecontroller::class,'paginate_search_game']);

Route::get('gameuser',[gamecontroller::class,'get_game_user']);  

 
Route::get('editgame/{id}',[gamecontroller::class,'gameedit']);

Route::put('updategame/{id}',[gamecontroller::class,'update']);  

Route::post('AddToCart',[gamecontroller::class,'AddToCart']);



