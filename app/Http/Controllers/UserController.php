<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Exception;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        try {
            $this->validate($request, [
                'username' => 'required',
                'password' => 'required'
            ]);

            if (Auth::guard('web')->attempt([
                'username' => $request->input('username'),
                'password' => $request->input('password')
            ])) {
                if (Auth::user()->role !== 'admin') {
                    Auth::logout();
                    throw new Exception('anda bukan admin.');
                }
                return redirect()->route('home');
            }
            return redirect()->back()->withErrors('Username atau password salah');
        } catch (ValidationException $e) {
            return back()->withErrors($e->validator->errors());
        } catch (Exception $e) {
            return back()->withErrors(['message' => $e->getMessage()]);
        }
    }
}
