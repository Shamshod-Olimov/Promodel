<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function loginView()
    {
        $hash = Hash::make('J9&GeVY');
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $this->validate($request, [
            'name'   => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {

            ///////////////////////

            return redirect('/blogs');
        }
        return redirect()->route('login')->with('error', 'Noto\'g\'ri kiritilgan');
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        }
        return redirect()->route('login');
    }
}
