<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class Users extends Controller
{
    
function index(Request $r)
{
  echo $r->file('user_img')->store('pract');  // create pract folder and store file in that folder
echo $r->file('user_img')->store(''); //if not giving folder name,then give blank paranthesis .file directly store in storage/app folder

}



//Eloquent Database

function index1()
{
  //echo"code is here";

  return User::all();


  //$data=restorant::all();

 // print_r($data);
}



function list3()
{
  //return User::all();  //fetch data

  //echo"hi";
//$data= User::all();

   //$data= User::where('name','saisagar')->get();
    // $data= User::orderby('name','asc')->get();
       $data= User::take(3)->get();   //limit function->take()
   return view('userview',['data'=>$data]);

}

 

 function save(Request $r)
 {
 	
   $user=new User;

   $user->name=$r->name;
   $user->address=$r->address;
   $user->save();

    print_r($r->input());
  }






}
