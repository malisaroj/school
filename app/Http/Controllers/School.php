<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class School extends Controller
{
  

  public function index(){

  	return view('school.index');

  }

  public function principalsmessage() {
  	return view('school.principalsmessage');
  }

    public function faculty() {
  	return view('school.faculty');
  }

    public function gallery() {
  	return view('school.gallery');
  }

    public function contact() {
  	return view('school.contact');
  }
  	
  

}


