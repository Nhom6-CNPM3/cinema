<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }


    public function create()
    {
        return view('admin.users.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'sdt' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required ',
            'role' => 'required ',
        ]);

        $user = new User([
            'sdt' => $request->input('sdt'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'role' => $request->input('role'),
            'password' => bcrypt($request->input('password')),
        ]);

        $user->save();

        return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
    }


    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'sdt' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable ',
        ]);

        $user = User::findOrFail($id);
        $user->sdt = $request->input('sdt');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }
        $user->save();

        return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully.');
    }


}
