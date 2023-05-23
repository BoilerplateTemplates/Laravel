<?php

namespace App\Http\Controllers\Auth\Register;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:6'],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        if (auth()->attempt(['email' => $request->email, 'password' => $request->password], true)) {
            toast()
                ->success(__('Welcome'), 'Success')
                ->pushOnNextPage();

            $request->session()->regenerate();

            return redirect()->intended(RouteServiceProvider::HOME);
        }

        // If unsuccessful, then redirect back to the login with the form data
        return redirect()
            ->back()
            ->withInput($request->only('name', 'email'));
    }
}
