<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use function Symfony\Component\String\u;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.list',['users'=>$users]);
    }

    public function profil()
    {
        dd("profile du user connecté");
        return "profile du user connecté";
    }
}
