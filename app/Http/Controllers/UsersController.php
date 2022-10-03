<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Profil;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $Users = Users::all();
        return view('welcome', compact('Users'));
    }

    public function create(){

    }

    public function store(Request $request){
        $store = new Users;
        $store -> email = $request ->email;
        $store -> nickname = $request -> nickname;
        $profil = new Profil;
        $profil -> name = $request -> name;
        $profil -> age = $request -> age;
        $profil -> phone = $request -> phone;
        $profil ->save();
        $store-> profil_id = $profil -> id;
        $store -> save();
        return redirect()->back();
    }
}
