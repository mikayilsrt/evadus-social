<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Faker\Provider\Image;

class SettingsController extends Controller
{

    public function index () {
        return view('profile.settings');
    }

    public function update (Request $request) {
    /*
        $validationForm = $request->validate([
            'name'          =>  'required|max:15',
            'user_name'     =>  'required|unique:users|max:15',
            'email'         =>  'required|email|max:255|unique:users',
            'password'      =>  'required|password_confirmation',
            'profile_image' =>  'required|max:255',
            'description'   =>  'required|max:100'
        ]);

        if ($validationForm->fails()) {
            return redirect('profile.settings')
                ->withErrors($validationForm)
                ->withInput();
        }*/

        $user = User::findOrFail(Auth::id());
        $user->name     =  $request->input('name');
        $user->user_name     =  $request->input('username');
        $user->email         =  $request->input('email');

        if ($request->hasFile('profile_image')) {
            $profile_image = $request->file('profile_image');
            $filename = time() . '.' . $profile_image->getClientOriginalExtension();
            Image::make($profile_image)->resize(256, 256)->save(public_path('uploads/profileimages/' . $filename));
            $user->profile_image = $filename;
        }

        $user->description   =  $request->input('description');
        $user->save();

        return redirect()->route('profile.settings');
    }

}
