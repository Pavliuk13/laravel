<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    public function show()
    {
        return view('/sign-up');
    }

    public function register(RegisterRequest $request)
    {
        if(Auth::check()){
            return redirect(route('/private'));
        }

        $user = User::create($request->validated());

        if($user){
            auth()->login($user);
            return redirect('/')->with('success', "Account successfully registered.");
        }
        return redirect('/sign-up')->withErrors([
            'formError'=>'Помилка при збереженні користувача'
        ]);
    }
}
