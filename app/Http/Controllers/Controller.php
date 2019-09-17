<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
//added this two lines down
use Illuminate\Http\Request;
use Validator;
use Auth;

class Controller extends Controller

{
    public function index(){
        return view('login');
    }
//login code
    function checklogin(Request $request){
        {
            $this->validate($request, [
             'email'   => 'required|email',
             'password'  => 'required|alphaNum|min:8'
            ]);
       
            $user_data = array(
             'email'  => $request->get('email'),
             'password' => $request->get('password')
            );
       
            if(Auth::attempt($user_data))
            {
                return redirect('/home');
            }
            else
            {
             return back()->with('error', 'Wrong Login Details');
            }
       
           }

           function home ()
           {
            return view('home');
           }
       }
    function logout()
    {
     Auth::logout();
     return redirect('main');
    }
    //end of code required for login
}
    
?>
