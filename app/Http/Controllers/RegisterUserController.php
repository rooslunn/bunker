<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\RegisterUserRequest;
use Illuminate\Support\Facades\Auth;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(RegisterUserRequest $request)
    {
        $form_data = collect($request->validated());

        $user_data = $form_data->only(['name', 'email', 'password'])->toArray();
        $user = User::create($user_data);

        $employer_data = $form_data->only(['employer', 'logo'])->toArray();
        $logo_path = $request['logo']->store('logos');

        $user->employer()->create([
            'name' => $employer_data['employer'],
            'logo' => $logo_path,
        ]);

        Auth::login($user);

        return redirect('/');
    }
}
