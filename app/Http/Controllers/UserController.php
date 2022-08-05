<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\session;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('users.register')->with('flash_message', 'User Created!');
    }

    public function edit()
    {
        return view('users.update')->with('flash_message', 'User Created!');
    }

    public function register(Request $request)
    {

        try {
            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));

            $request->validate([
                'name' => 'required',
                'email' => 'required|unique:users',
                'password' => 'required',
                'confirm-password' => 'required|same:password',
            ]);


            $user->save();
            return response()->json($user);
        } catch (\Throwable $err) {
            throw $err;
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|string'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $output = 'Success';
            Session::put('message', $output);
        }
    }



    public function getuser($id)
    {

        $user = User::find($id);
        return response()->json($user);
    }



    public function getUsers()
    {

        $users = User::all();
        return response()->json($users);
    }

    public function update(request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');

        $user->save();
        return response()->json($user);
    }

    public function delete(request $request, $id)
    {

        $user = User::find($id);
        $user->delete();

        return response()->json(['message' => 'successfully deleted']);
    }
}
