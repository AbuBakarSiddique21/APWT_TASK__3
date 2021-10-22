<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function dashboard(){
        $admin = Admin::where('adminId',Session()->get('adminId'))->first();
        return view('pages.dashboard')->with('admin',$admin);
    }
    public function editAdminInfo(){
        $admin = Admin::where('adminId',Session()->get('adminId'))->first();
        return view('pages.edituser')->with('user',$admin);
    }
    public function adminInfoUpdate(Request $request){
        $this->validate(
            $request,
            [
                'name'=>'required|min:4|max:50',
                'email'=>'email',
                'username'=>'required|min:5|max:20',
                'dob'=>'required',
                'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'gender'=>'required'
            ],
            [
                'name.required'=>'Your Name is needed',
                'name.min'=>'Your Name should be more than 4 charecters'
            ]
            );

        $var = Admin::where('adminId',$request->id)->first();
        $var->name= $request->name;
        $var->email = $request->email;
        $var->phone = $request->phone;
        $var->username = $request->username;
        $var->dob = $request->dob;
        $var->gender = $request->gender;
        $var->save();
        return redirect()->route('dashboardAdmin');
    }
}