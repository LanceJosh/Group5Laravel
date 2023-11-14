<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
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
    return redirect()->route('users.show', $user->id);
}
public function show($id)
{
    // Logic to retrieve the user with the given ID
    $user = User::find($id);

    // Redirect to the dashboard route
    return redirect()->route('dashboard');
}

}
