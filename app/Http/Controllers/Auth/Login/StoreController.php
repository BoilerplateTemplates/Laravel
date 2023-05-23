<?php

namespace App\Http\Controllers\Auth\Login;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6'],
        ]);

        if (auth()->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ], true)) {
            toast()
                ->success(__('Welcome back'), 'Success')
                ->pushOnNextPage();

            return redirect(RouteServiceProvider::HOME);
        }

        // If unsuccessful, then redirect back to the login with the form data
        return redirect()
            ->back()
            ->withInput($request->only('email', 'remember'));
    }
}
