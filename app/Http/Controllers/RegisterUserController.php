<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

final class RegisterUserController extends Controller
{
    public function create(): \Illuminate\Contracts\View\View
    {
        return view('auth.register');
    }

    public function store(RegisterUserRequest $request): \Illuminate\Http\RedirectResponse
    {
        $form_data = $request->validated();

        $user_data = Arr::only($form_data, ['name', 'email', 'password']);
        $user = User::create($user_data);

        $employer_data = Arr::only($form_data, ['employer', 'logo']);
        $logo_path = $request['logo']->store('logos');

        $user->employer()->create([
            'name' => $employer_data['employer'],
            'logo' => $logo_path,
        ]);

        Auth::login($user);

        return redirect('/');
    }
}
