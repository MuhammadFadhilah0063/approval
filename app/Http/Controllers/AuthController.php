<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view("login.index");
    }

    public function login(Request $request)
    {
        try {
            $username = $request->username;
            $password = $request->password;

            if (Auth::attempt(['username' => $username, 'password' => $password])) {
                // Berhasil
                session()->flash('login', true);
                return redirect('/data-administrasi');
            } else {
                // Gagal
                session()->flash('gagal', 'Username atau Password anda salah!');
                return redirect('/login-administrasi');
            }
        } catch (Exception $e) {
            session()->flash('gagal', $e->getMessage());
            return redirect('/login-administrasi');
        }
    }

    public function changePassword(Request $request)
    {
        try {

            $user = User::findOrFail($request->id);

            if (Hash::check($request->password_lama, $user->password)) {
                $user->update([
                    'password' => Hash::make(trim($request->password_baru)),
                ]);
            } else {
                return response()->json([
                    "status"  => "failed",
                    "message" => "Gagal ubah password"
                ]);
            }

            return response()->json([
                "status"  => "success",
                "message" => "Berhasil ubah password"
            ]);
        } catch (QueryException $e) {
            return response()->json([
                "status"  => "failed",
                "message" => $e->getMessage()
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();
        return view("login.index");
    }
}
