<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function edit(User $user)
    {
        $purchases = Purchase::where('user_id', Auth::user()->id)->get();
        return view('profile', compact('purchases'));
    }

    public function update(Request $request)
    {
        // Validasi data yang dimasukkan
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
        ]);

        // Perbarui nama dan email
        $user = Auth::user();
        User::where('id', $user->id)->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email']
        ]);


        return redirect()->route('profile')->with('success', 'Profil berhasil diperbarui');
    }

    public function updatePassword(Request $request)
    {
        // Validasi password yang dimasukkan
        $validatedData = $request->validate([
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        // Cek apakah password lama benar
        $user = Auth::user();
        if (!Hash::check($validatedData['current_password'], $user->password)) {
            return redirect()->route('profile.edit')->withErrors(['current_password' => 'Password lama tidak sesuai']);
        }

        User::where('id', $user->id)->update(['password' => Hash::make($validatedData['new_password'])]);


        return redirect()->route('profile')->with('success', 'Password berhasil diperbarui');
    }
}
