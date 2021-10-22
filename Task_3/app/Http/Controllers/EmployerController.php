<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employer;

class EmployerController extends Controller
{
    public function dashboard(){
        $employer = Employer::where('id',Session()->get('employerId'))->first();
        return view('pages.dashboard')->with('employer',$employer);
    }
    public function editEmployerInfo(){
        $employer = Employer::where('id',Session()->get('employerId'))->first();
        return view('pages.edituser')->with('user',$employer);
    }
    public function employerInfoUpdate(Request $request){
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

        $var = Employer::where('id',$request->id)->first();
        $var->name= $request->name;
        $var->email = $request->email;
        $var->phone = $request->phone;
        $var->username = $request->username;
        $var->dob = $request->dob;
        $var->gender = $request->gender;
        $var->save();
        return redirect()->route('dashboardEmployer');
    }
}