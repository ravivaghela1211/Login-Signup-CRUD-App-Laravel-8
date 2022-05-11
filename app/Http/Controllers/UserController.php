<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\student;
use App\Models\tbl_admin;
use Facade\FlareClient\View;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    //
    public function index()
    {
        $data['user'] = student::all();
        return View('show_data',$data);
    }
    public function signUp(Request $req){

        $req->validate([
            'name'=>'required|min:2',
            'email' => 'required|unique:tbl_admins|email|max:255',
            'password' => 'same:confirmpassword',[
                Password::min(8)
                        ->mixedCase()
                        ->numbers()
                        ->symbols()
                        ->uncompromised(),

            ],
            'confirmpassword'=>'required|min:8'
        ]);

        $tbl_admin = new tbl_admin();
        $tbl_admin->id = null;
        $tbl_admin->name = $req->name;
        $tbl_admin->email = $req->email;
        $tbl_admin->password = $req->password;
        $tbl_admin->save();
        $req->session()->flash('success', 'Signup SucessFully');
        return redirect('/login');
        
        
    }

    public function loginUser(Request $req){

        $user = tbl_admin::where('email',$req->email)
                                ->where('password',$req->password)->first()->toArray();                      
       

        
        if(!empty($user['email'])){

            $req->session()->put('email',$user['email']);

            // echo $req->session()->get('email');
           // $req->session()->forget('email');
            // echo $req->session()->get('email');
            return redirect('/');
        }else{
            
           // return $data['user'];
            $req->session()->flash('status', 'Login Failed!');
            return redirect('/login');
        }
    }


    public function logoutUser(Request $req)
    {
        $req->session()->forget('email');
        return redirect('/login');
    }
    public function addData(Request $req)
    {
        $student = new student();
        $student->id = null;
        $student->name = $req->name;
        $student->city = $req->city;
        $student->save();
        $req->session()->flash('status', 'Data Added SucessFully!');
        return redirect('/');
    }

    
    public function showData($id)
    {
        $data['user'] = student::find($id);
        return View('update_data',$data);
    }

    public function updateData(Request $req)
    {
        $data = student::find($req->id);
       
        $data->name = $req->name;
        $data->city = $req->city;
        $data->save();
        $req->session()->flash('status', 'Data Updated SucessFully!');
        return redirect('/');
    }

    public function deleteData($id,Request $req)
    {
        $data = student::find($id);
        $data->delete();
        $req->session()->flash('status', 'Data Deleted SucessFully!');
        return redirect('/');
    }


}
