<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function show(Request $request, $slug)
    {
        $user = User::where('tag', $slug)->firstOrFail(); // replace $slug with the tag of the user
        $followsCount = $user->follows()->count();
        $followersCount = $user->followers()->count();



        return view('profile', compact('user', 'followsCount', 'followersCount'));
    }


}
