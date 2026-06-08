<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;


class BasicController extends Controller
{
    public function home(){
        $message = Message::all();
        return view('home')->with('message', $message);
    }
    public function home_admin(){
        return view('home_admin');
    }

    public function account(){
        return view('account');
    }

    public function cart(){
        return view('cart');
    }


    public function submit(Request $request) {
        $message = new Message();

        $message->photo = $request->input('photo');
        $message->title = $request->input('title');
        $message->seller = $request->input('seller');
        $message->price = $request->input('price');
        $message->rating = $request->input('rating');
        $message->category = $request->input('category');
        $message->description = $request->input('description');
        $message->save();

        return redirect()->route('home');
    }


}
