<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{

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
  	$r->session()->put('name','seema');

  	echo"Data has been added to session";
  }


public function deleteSessionData(Request $r)
{
	$r->session()->forget('name');
	echo"Data has been removed from session";
}

}
