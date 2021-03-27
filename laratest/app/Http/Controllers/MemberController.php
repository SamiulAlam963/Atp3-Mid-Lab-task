<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MemberController extends Controller
{
   public function index(){
       return view('Member.Registration');
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
           return redirect('/memberreg');
       }
   }
}