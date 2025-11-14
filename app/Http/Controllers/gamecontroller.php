<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\game;
use Illuminate\Support\Facades\File;
use App\Models\cart;


class gamecontroller extends Controller
{
    public function search() {
        // $data = admin::all();
        // $data = admin::select()->get();
        // $data = admin::select('adminname')->get();
        // $data = admin::select('adminname','ac_password')->get();
        // $data = admin::select('*')->get();
        // $data = admin::select('*')->where('adminname','hari')->get();
        // $data = admin::select('*')->where('ac_password','123456')->get();
        // $data = admin::select('*')->where('adminname','hari')->where('ac_password','123456')->get()
        $info = game::select('*')->where('name','hari')->get();

        // $data = admin::select('*'->orderby('adminname','hari')->get();
        return View('gamelist',compact('info'));
    }

    public function search_game(Request $req)  {
         
        //$info = admin::select()->where('adminname',$req->adminname)->get();
        $info = game::select()->where('name',$req->name)->paginate(1);
         return view('gamelist',compact('info'));
        // echo $data;
     }

    // public function paginate_search() {
    //     $info=game::select()->paginate(1); 
    //     return view('gamelist',compact('info'));
    // }
    
    public function addgame(Request $req) 
    {
        $game = new game;
        $game->name=$req->name;
        $game->image=$req->image;
        $game->description=$req->description;
        $game->price=$req->price;
        $game->quantity=$req->quantity;
        $game->category=$req->category;
        $game->type=$req->type;
        $game->info_link=$req->info_link;
        

        if($req->hasfile('image'))
        {
            $file = $req->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/',$filename);
            $game->image = $filename;
        }
        $game->save();
        return redirect('shop')->with('status','Game Has Been Added :)');
        // return redirect('gamelist');
    }

    public function get_game() {
        $allGames=game::all();
        $bestSeller=game::where('type','Best Sellers')->get();
        $Latest=game::where('type','latest')->get();
       

        return view('shop',compact('allGames','bestSeller','Latest'));
        
    }

    public function gamelist()  {
        $info=game::paginate(1);
        return view('gamelist',['info'=>$info]);
    }

    public function delete_g($id) {
        $info=game::find($id);
        $info->delete();
        return redirect()->back()->with('Success',"Game Deleted Successfully :)");
        
    }

    public function gameedit($id) {
        $game = game::find($id);
        return view('gameedit',compact('game'));
    }

    public function update(Request $req, $id)
{
    $game = game::find($id);

    $game->name = $req->name;
    $game->description = $req->description;
    $game->price = $req->price;
    $game->quantity = $req->quantity;
    $game->category = $req->category;
    $game->type = $req->type;
    $game->info_link = $req->info_link;

    if ($req->hasFile('image')) {
        $destination = 'images/im/' . $game->image;

        if (File::exists($destination)) {
            File::delete($destination);
        }

        $file = $req->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('images/im', $filename);
        $game->image = $filename;
    }

    $game->update();

    return redirect('gamelist')->with('status', 'Game Has Been Updated :)');
}

    // Game Search For Users...

    
    public function searchgame_user() {
        // $data = admin::all();
        // $data = admin::select()->get();
        // $data = admin::select('adminname')->get();
        // $data = admin::select('adminname','ac_password')->get();
        // $data = admin::select('*')->get();
        // $data = admin::select('*')->where('adminname','hari')->get();
        // $data = admin::select('*')->where('ac_password','123456')->get();
        // $data = admin::select('*')->where('adminname','hari')->where('ac_password','123456')->get();
        $info = game::select('*')->where('name','hari')->get();

        // $data = admin::select('*'->orderby('adminname','hari')->get();
        return View('gameuser',compact('info'));
    }

    public function search_game_user(Request $req)  {
         
        //$info = admin::select()->where('adminname',$req->adminname)->get();
        $info = game::select()->where('name',$req->name)->paginate(1);
         return view('gameuser',compact('info'));
        // echo $data;
     }

     public function paginate_search_game() {
        $info=game::select()->paginate(1); 
        return view('gameuser',compact('info'));
    }
     
    public function get_game_user() {
        //$info=admin::all();
        $info=game::paginate(1);
        return view('gameuser',['info'=>$info]);
    }

    public function AddToCart(Request $req) 
    {
       if (session()->has('id')) {
        $item = new cart();
        $item->quantity=$req->input('quantity');
        $item->gameid=$req->input('id');
        $item->userid=session()->get('id');
        $item->save();

        return redirect()->back()->with('Success','Item Has Been Added :)');
       }
       else{
        return redirect('login')->with('error','INfo, Please Login First');
       }
    }
}
