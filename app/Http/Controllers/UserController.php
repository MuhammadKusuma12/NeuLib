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
    public function login()
    {
        return view('login');
    }

    public function auth(Request $request)
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

    public function index()
    {
        $users = User::latest()->paginate(20);
        return view('user.index', ['users' => $users], ['activePage' => 'user']);
    }

    public function create()
    {
        return view('user.create', ['activePage' => 'user']);
    }

    public function store(Request $request)
    {
        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->to('/user');
    }

    public function show($id)
    {
        $user = User::with('anggotas')->findOrFail($id);

        if ($user->anggotas->isEmpty()) {
            return redirect()->route('user.index')->withErrors(['message' => 'User belum mengisi profil']);
        }
        $anggota = $user->anggotas->first();

        return view('user.show', ['anggota' => $anggota, 'users' => $user, 'activePage' => 'user']);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', ['activePage' => 'user', 'user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->to('/user');
    }
}
