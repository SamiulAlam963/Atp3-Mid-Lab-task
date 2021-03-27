<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index(){
       return view('Registration.index');
   }

   public function verify(Request $req)
   {
       if($req->username==""||$req->password=="") {
           echo "Null submission";
       }
       elseif($req->username==$req->password){
          // echo "Valid User";
          return redirect('/home');
       } 
       else
       {
           return redirect('/adminreg');
       }
   }
}