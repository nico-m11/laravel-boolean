<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index() {

      $data = User::all();
      return view('User', compact('data'));
  }

    public function show($id) {

      $dettagli_user = User::find($id);
      return view('dettagli', compact('dettagli_user'));
  }

}
