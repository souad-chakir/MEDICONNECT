<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
  public function showRegistrationForm() { return view('register'); }

  public function register(Request $request) {
    $validatdata = [
      'fullname' => 'required|string|max:255',
      'email' => 'required|string|email|max:255|unique:users',
      'role' => 'required|string|in:doctor,user',
      'password' => 'required|string|min:8|confirmed:cpassword',
    ];
    $validator_data = Validator::make($request->all(), $validatdata);
    if ($validator_data->fails()) {
      return redirect()->back()->withErrors($validator_data)->withInput();
    }
    $data = $request->all();
    $data['password'] = Hash::make($data['password']);
    User::create([
      'name' => $data['fullname'],
      'email' => $data['email'],
      'role' => $data['role'],
      'password' => $data['password'],
    ]);
    return redirect()->route('login')->with('success', 'Utilisateur créé');
  }
}
