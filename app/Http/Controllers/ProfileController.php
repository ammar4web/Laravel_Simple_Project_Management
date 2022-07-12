<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }

    public function update()
    {
        $userId = auth()->user()->id;
        $data = request()->validate(
            [
                'name' => 'required|min:3',
                'email' => ['required', 'email'],
                'password' => 'nullable|confirmed|min:8',
                ]
            );

        if (request()->has('password')) {
            $data['password'] = Hash::make(request('password'));
        }
        User::findorfail($userId)->update($data);
        return redirect('/projects');

    }
}
