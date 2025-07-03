<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

final class SessionController extends Controller
{
    public function create(): \Illuminate\Contracts\View\View
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request): \Illuminate\Http\RedirectResponse
    {
        $login_data = $request->validated();

        if (! Auth::attempt($login_data)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry, credentials do not match',
            ]);
        }

        request()->session()->regenerate();

        return redirect(route('jobs.index'));
    }

    public function destroy(): \Illuminate\Http\RedirectResponse
    {
        Auth::logout();

        return redirect(route('jobs.index'));
    }
}
