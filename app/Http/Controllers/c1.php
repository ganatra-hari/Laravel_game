<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\user;
use App\Models\admin;
use Auth;



class c1 extends Controller
{
 
        public function login() {
            return view('login');
        }

        public function loginprocess(Request $req) {
            $data = User::where('email', $req->input('email'))->first();
        
            if ($data && Hash::check($req->input('password'), $data->password)) {
                session()->put('id', $data->id);
                session()->put('email', $data->email); // or any other session data
        
                return redirect('home'); // or another page
            } else {
                return redirect('login')->with('error', 'Hey, Your Information is Incorrect :(');
            }
        }

        public function logout() {
 
            session()->forget('id');
            session()->forget('email');
            return redirect('login');
        }


         public function search_user() {
            // $data = User::all();
            // $data = User::select()->get();
            // $data = User::select('email')->get();
            // $data = User::select('email','c_password')->get();
            // $data = User::select('*')->get();
            // $data = User::select('*')->where('adminname','hari')->get();
            // $data = User::select('*')->where('ac_password','123456')->get();
            // $data = User::select('*')->where('adminname','hari')->where('ac_password','123456')->get();
            $data = User::select('*')->where('email','hari')->get();

            // $data = User::select('*')->orderby('email','hari')->get();
            return View('userlist',compact('data'));
        }

         public function search_email(Request $req)  {
             
            //$info = User::select()->where('email',$req->email)->get();
            $data = User::select()->where('email',$req->email)->paginate(3);
             return view('userlist',compact('data'));
        //     echo $data;
         }

        public function pag_search() {
            $data=User::select()->paginate(3); 
            return view('userlist',compact('data'));
        }

        public function adddata(Request $req) 
        {
            $req->validate(
            [
                'email'=>'required|email',
                'password'=>'required|min:6',
                // 'c_password'=>'required',
                // 'age'=>'required|numeric',
                // 'phone'=>'required|digits:10,
                // 'date'=>'date',
            ],
        [
                // 'name.required'=>'Name is must'               //for custom error message...
        ]);

            $User = new User;
            $User->name=$req->name; 
            $User->email=$req->email;
            $User->password=$req->password;
            // $User->c_password=$req->c_password;
    
            $User->save();
            // return redirect('login');
            return redirect('login')->with('success','Hey, Your Account is Ready :)');

        }

        public function getdata() {
            // $data=User::all();
            $data=User::paginate(1);
            return view('userlist',['data'=>$data]);
        }
    
        public function delete_u($id) {
            $data=User::find($id);
            $data->delete();
            return redirect('userlist');
        }

        public function u_update($id){
            $data=User::find($id);
            return view('update_u',['data'=>$data]);
        }

        public function update_u(Request $req,$id) 
        {
            $User=User::find($req->id);
            $User->name=$req->name;
            $User->email=$req->email;
            $User->password=$req->password;
            // $User->c_password=$req->c_password;
    
            $User->save();
            return redirect('userlist');
        }
     
    }
