<?php

namespace App\Http\Controllers\Api\Auth\Logout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'deviceId' => ['required'],
        ]);

        $request->user()->currentAccessToken()->delete();
        $request->user()->tokens()->where('name', $request->deviceId)->delete();

        return true;
    }
}
