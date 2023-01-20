<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ForgotRequest;
use App\Mail\ForgotPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class AuthController extends Controller
{
    public function loginPage(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.auth.login');
    }

    public function loginEmailPage(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.auth.login-mail');
    }

    public function registerPage(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.auth.register');
    }

    public function registerEmailPage(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.auth.register-email');
    }

    public function forgot(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.auth.forgot');
    }
    public function forgotsuccess(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.auth.forgotsuccess');
    }

    public function forgotProcess(ForgotRequest $request)
    {
        $data = $request->validated();

        $user = User::where(['email' => $data['email']])->first();

        $password = uniqid();

        $user->password = $password;
        $user->save();

        Mail::to($user)->send(new ForgotPassword($password));

        return redirect()->route('forgotsuccess');
    }

    public function logout()
    {
        auth('web')->logout();

        return redirect()->route('index');
    }
}
