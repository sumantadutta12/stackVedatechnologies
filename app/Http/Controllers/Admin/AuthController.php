<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class AuthController extends Controller
{
    // Login page
    public function index(): View
    {
        return view('admin.login');
    }


    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required|min:5',
        ]);

        try {
            $user = User::whereRaw('email = ?', [$validated['email']])->where('user_type', config('const.user_types.admin.key'))->first();

            if (!$user) {
                session()->flash('alert-danger', 'Invalid Email or Password!');
            } elseif (!Hash::check($validated['password'], $user->password)) {
                session()->flash('alert-danger', 'Invalid Username or Password!');
            } elseif ($user->status == 0) {
                session()->flash('alert-danger', 'You account has been disabled, please contact administrator!');
            } else {
                Auth::login($user);

                return redirect()->intended(route('admin.dashboard'));
            }
        } catch (Exception $e) {
            session()->flash('alert-danger', $e->getMessage());
        }

        return redirect()->intended(route('admin.login'));
    }


    public function destroy(): RedirectResponse
    {
        Auth::logout();
        session()->flash('alert-success', 'You have successfully logged out!');

        return redirect()->intended(route('admin.login'));
    }
}
