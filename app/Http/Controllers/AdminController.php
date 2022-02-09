<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Admin;

use Session;
use App\http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();

class AdminController extends Controller
{
    public function index(){
        return view('admin_login');
    }
    public function show_dashboard(){
        return view('admin.dashboard');
    }
    public function dashboard(Request $request){
        $admin_email= $request->admin_email;
        $admin_password= MD5($request->admin_password);

//        $result = DB::table('tbl_admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
    $result=Admin::where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
        if($result){
            $request->session()->put('admin_name',$result->admin_name);
            //Session::put('admin_name',$result->admin_id);
            return Redirect::to('/dashboard');
        } else{
            $request->session()->put('message','account or password is error, Enter again please');
            return Redirect::to('/admin');
        }
    }
    public function logout(){
        
    }
}