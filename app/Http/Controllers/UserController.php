<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $users= User::all();
    return view('users.index', ['users' => $users ]);
  }


    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */



    public function show($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}
