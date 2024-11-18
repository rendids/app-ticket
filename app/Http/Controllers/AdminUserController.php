<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::where('role' ,'user')->get();
        return view('admin.user', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id . '|max:255', // Exclude the current user's email
        ]);

        $user = User::find($id);

        if (!$user) {
            return redirect()->route('admin.user.index')->withErrors(['user' => 'User not found.']);
        }
        $data = $request->only(['name', 'email']);

        $user->update($data);

        return redirect()->route('admin.user.index')->with('success', 'User updated successfully.');

    }
    public function destroy($id){
        $user = User::find($id);

        $user->delete();

        return redirect()->route('admin.user.index')->with('success', 'User updated successfully.');

    }
}
