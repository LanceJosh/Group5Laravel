<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

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

    public function viewUserProfile($user)
    {
        $user = User::find($user);
        return view('profile.view-profile', compact('user'));
    }

    public function updateProfile(User $user, Request $request)
    {
        $request->validate([
            'profile_photo' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $user = User::find(Auth::user()->id);

        if ($request->hasFile('profile_photo')) {
            if ($user->profile_photo_path !== null) {
                $fullPath = public_path($user->profile_photo_path);

                if (File::exists($fullPath)) {
                    File::delete([$fullPath]);
                }
            }

            $photo = $request->file('profile_photo');
            $profile_photo_name = hexdec(uniqid()) . '_' . $photo->getClientOriginalName();
            $up_loc = 'profile_photos/';
            $path = $up_loc . $profile_photo_name;
            $photo->move($up_loc, $profile_photo_name);
            $user->profile_photo_path = $path;
        }

        $user->save();

        return Redirect()->back()->with('success', 'Profile picture updated successfully.');
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->role = $request->input('role');
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
