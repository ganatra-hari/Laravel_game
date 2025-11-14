<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Auth;

class admincontrol extends Controller
{
    
    public function a_login() {
        return view('a_login');
    }

    public function admin_loginprocess(Request $req) {
        
        $info=['adminname'=>$req->adminname,'a_password'=>$req->a_password,'ac_password'=>$req->ac_password];

        if (Auth::attempt($info)) {
            
            return redirect('adminlist');

        } 
        else {
            echo "Error :(";
        }
        print_r($req->all());

    }
    public function search_admin() {
        // $data = admin::all();
        // $data = admin::select()->get();
        // $data = admin::select('adminname')->get();
        // $data = admin::select('adminname','ac_password')->get();
        // $data = admin::select('*')->get();
        // $data = admin::select('*')->where('adminname','hari')->get();
        // $data = admin::select('*')->where('ac_password','123456')->get();
        // $data = admin::select('*')->where('adminname','hari')->where('ac_password','123456')->get();
        $admin = admin::select('*')->where('adminname','hari')->get();

        // $data = admin::select('*'->orderby('adminname','hari')->get();
        return View('adminlist',compact('admin'));
    }

    public function search_name(Request $req)  {
         
        //$info = admin::select()->where('adminname',$req->adminname)->get();
        $admin = admin::select()->where('adminname',$req->adminname)->paginate(1);
         return view('adminlist',compact('admin'));
        // echo $data;
     }

    public function paginate_search() {
        $admin=admin::select()->paginate(1); 
        return view('adminlist',compact('admin'));
    }
    
    public function add_data(Request $req) 
    {
        $req->validate(
        [
                'adminname'=>'required|email',
                'a_password'=>'required|min:6',
                'ac_password'=>'required|min:6',
                // 'age'=>'required|numeric',
                // 'phone'=>'required|digits:10,
                // 'date'=>'date',
        ],
    [
                // 'name.required'=>'Name is must'               //for custom error message...
    ]);
        $admin = new admin;
        $admin->adminname=$req->adminname;
        $admin->a_password=$req->a_password;
        $admin->ac_password=$req->ac_password;

        $admin->save();
        return redirect('adminlist');
    }

    public function get_data() {
        //$info=admin::all();
        $admin=admin::paginate(1);
        return view('adminlist',['admin'=>$admin]);
    }

    public function delete_a($id) {
        $admin=admin::find($id);
        $admin->delete();
        return redirect()->back()->with('Success',"Admin Deleted Successfully :)");
        
    }

    public function admin_update($id){
        $admin=admin::find($id);
        return view('a_update',['admin'=>$admin]);
    }

    public function a_update(Request $req) 
    {
        $admin=admin::find($req->id);
        $admin->adminname=$req->adminname;
        $admin->a_password=$req->a_password;
        $admin->ac_password=$req->ac_password;

        if (!empty($request->a_password)) {
            $admin->a_password = Hash::make($request->a_password);
        }

        $admin->save();
        return redirect('adminlist');
    }


}


