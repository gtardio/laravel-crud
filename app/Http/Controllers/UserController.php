<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class UserController extends Controller
{
  public function index()
  {
    $users = User::all();

    return view('users.index', compact('users'));
    //stiamo passando solo una variabile, quindi ha senso usar compact()
  }
}
