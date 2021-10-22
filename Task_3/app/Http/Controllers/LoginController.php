<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seeker;
use App\Models\Admin;

class LoginController extends Controller
{
    public function login(){
        return view('pages.login');
    }
    public function loginCheck(Request $request){
        $this->validate(
            $request,
            [
                
                'username' => 'required',
                'password'=>'required'
            ],
            [
                'username.required'=> 'Enter your username',
                
            ]
        );

        $employers = Employer::all();
        $admins = Admin::all();
        $flag=False;
            foreach($admins as $user)
        {
            if($user->username== $request->username && $user->password==md5($request->password))
                {   
                    $flag=True;
                    $request=session()->put('admin',$user->username);
                    $request=session()->put('adminId',$user->adminId);
                    return redirect()->route('dashboardAdmin');
                }
                
        }
            foreach($employers as $user)
        {
            if($user->username== $request->username && $user->password==md5($request->password))
                {
                    $flag=True;
                    $request=session()->put('employer',$user->username);
                    $request=session()->put('employerId',$user->id);
                    return redirect()->route('dashboardEmployer');
                }
                
        }
        if($flag==False)
        {
           return ("User Id Or Password Not Matched");
        }
    }
}