<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class UsersController extends Controller
{
    public function index()
    {
        return view('users.index')->with('users', User::all());
    }
     public function makeAdmin(User $user)
        {
            $user->role = 'admin';

            $user->save();

            toastr()->success('utilisateur à devenir admin maintenant!');
            
            return redirect(route('users.index'));
        }
}
