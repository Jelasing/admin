<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

class JdController extends Controller
{
    public function index()
    {
    	return view('jds.display');
    }

    public function admin()
    {
    	  	
    	return view('jds.demo.admin');
    	
   } 
   public function user()
   {
   		 $users = DB::table('users')->get();
   		 
         return view('jds.demo.users',['users' => $users]);
   }

   public function adminmigrate()
   {
   		 $migrations = DB::table('migrations')->get();
   		 
         return view('jds.demo.adminmigration',['migrations' => $migrations]);
   }

    
            
    	    
}
