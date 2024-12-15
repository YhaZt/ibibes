<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incubatee;
use App\Models\Mentor;
use App\Models\Investor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email_address', 'password');
        if ($this->attemptLogin($credentials)) {
            return redirect()->intended('/home');
        }
        return back()->withErrors(['email_address' => 'The provided credentials do not match our records, or the account is not active.',]);
    }
    protected function attemptLogin($credentials)
    {
        return $this->attemptLoginForUserType($credentials, Incubatee::class) || $this->attemptLoginForUserType($credentials, Mentor::class) || $this->attemptLoginForUserType($credentials, Investor::class);
    }
    protected function attemptLoginForUserType($credentials, $userType)
    {
        $user = $userType::where('email_address', $credentials['email_address'])->where('is_active', 1)->first();
        if ($user && Hash::check($credentials['password'], $user->password)) {
            Auth::login($user);
            return true;
        }
        return false;
    }
}
