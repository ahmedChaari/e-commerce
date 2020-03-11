<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Users\UpdateProfileRequest;
use App\User;
use Session;

class UsersController extends Controller
{
    public function index()
        {
            return view('users.index')->with('users', User::all());
        }

    public function edit()
        {
            return view('users.edit')->with('user', auth()->user());
        }


    public function update(UpdateProfileRequest $request)
        {
            $user = auth()->user();

            $user->update([
                'name'  => $request->name,
                'about' => $request->about

            ]);
           
            toastr()->success('Modification enregistrée avec succès !');
            return redirect(route('home'));

        }

    public function makeAdmin(User $user)
        {
            $user->role = 'admin';

            $user->save();

            toastr()->success('utilisateur à devenir admin maintenant!');

            return redirect(route('users.index'));
        }
}
