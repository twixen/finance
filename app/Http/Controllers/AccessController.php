<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccessController extends Controller {

    public function login() {
        return view('login');
    }

    public function loginSend(Request $request) {
        $inputs = $request->only(['email', 'password']);
        if (auth()->attempt(['email' => $inputs['email'], 'password' => $inputs['password']])) {
            return redirect()->intended();
        } else {
            return redirect()->route('login')->with(['error' => 'Dane logowania są niepoprawne']);
        }
    }

    public function logout() {
        auth()->logout();
        return redirect()->route('index');
    }
}
