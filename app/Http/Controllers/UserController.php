<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	public function returnNavBar(){
		$navbar=[];
		$navbar['Contact']='contact';
		$navbar['About Us']='about';
		return $navbar;
	}
    public function index(){
    	$navbar=$this->returnNavBar();
    	return view('users.dashbord',['navbar'=>$navbar]);
    }
}
