<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\restorant;
use Illuminate\Support\Facades\DB;  
  use Illuminate\Pagination\Paginator;

use App\User;
use Sentinel;
use useTailwind;
use Crypt;

class RestoController extends Controller
{
	function index()

	{
		return view('home');
	}


	function list()
	{  
		 $data=restorant::all();
		return view('list',["data"=>$data]);
	}


	function add(Request $r)
	{
		//return $r->input();
	
         $resto=new restorant;
         $resto->name=$r->input('name');
         $resto->email=$r->input('email');;
         $resto->address=$r->input('address');

         $resto->save();

         $r->session()->flash('status','restorant submitted successfully');

         return redirect('list');
     }



     function delete($id)
     {
     	//return $id;

     	restorant::find($id)->delete();

     	Session::flash('status','restorant deleted successfully');
        return redirect('list');
     }


     function edit($id)
     {
     	 $data=restorant::find($id);
     
        return view('edit',['data'=>$data]);
     	

     }


     
     
	function update(Request $r)
	{
		//return $r->input();
	
         $resto=restorant::find($r->input('id'));
         $resto->name=$r->input('name');
         $resto->email=$r->input('email');;
         $resto->address=$r->input('address');;
         $resto->save();

         $r->session()->flash('status','restorant updated successfully');

         return redirect('list');
     }




   function register(Request $r)

       {

      // echo Crypt::encrypt('123@abc');
      //return $r->input();
      	$user=new User;
  $user->name=$r->input('name');
  $user->email=$r->input('email');
  $user->password=Crypt::encrypt($r->input('password'));
  

  $user->save();
$r->session()->put('user',$r->input('name'));
         return redirect('/');

       }




function login(Request $r)
{

$user=User::where("email",$r->input('email'))->get();




 if(Crypt::decrypt($user[0]->password)==$r->input('password'))

{
 $r->session()->put('user',$r->input('name',$user[0]->name));
         return redirect('/');
}


}


function searchname(Request $r)
{
  return $resto=restorant::find($r->input('name'));
}

//pagination

function list2()
{  

  $data=DB::table('restorants')->paginate(10);
  //echo"hello paging";
 return view('shownames',['data'=>$data]);

}



function logout()
{
  return view('logout');

 // return redirect('/');
}










//session destroyr 

/*

public function showProfile(Request $r, $id)
    {
         $value = $request->session()->get('id');

         echo $value;
        //
    }
*/


public function accessSessionData(Request $r)
  {
    //echo"session is destroed";




    if($r->session()->has('name'))
      echo $request->session()->get('name');

    else
      echo'no data in session';
  
  }


  public function storeSessionData(Request $r)
  {
    $r->session()->put('name','$name');

    echo"Data has been added to session";
  }


public function deleteSessionData(Request $r)
{
  $r->session()->forget('name');
  echo"Data has been removed from session";
}














}
