<?php
namespace stock\Http\Controllers;

use stock\Http\Requests;
use Auth;
use Request;

class LoginController extends Controller
{
    public function login ()
    {
    	$credentials = Request::only ( 'email', 'password' );

    	if ( !Auth::attempt ( $credentials ) )
    	{
    		return "The credentials are not valid";
    	}

    	return "User " . Auth::user ()->name . " logged with success";
    }
}
