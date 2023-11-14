<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('dashboard', compact('users'));
    }
    

    public function edit($id)
{
    $user = User::find($id);
    return view('editUser', compact('user'));
}
public function update(Request $request, $id)
{
    $user = User::find($id);
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->save();
    $users = User::all();
        return view('dashboard', compact('users'));
}
public function show($id)
{
    $user = User::find($id);

    $users = User::all();
    return redirect()->route('dashboard', compact('users'));
}
public function destroy($id)
{
    
    $user = User::findOrFail($id);
    $user->delete();
    $users = User::all();
    return redirect()->route('dashboard', compact('users'))->with('success', 'User deleted successfully');
}

}
