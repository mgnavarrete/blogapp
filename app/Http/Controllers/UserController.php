<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserRol;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'profession' => 'required|string|max:255',
            'bio' => 'required|string|max:255',
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        //$name = ($request->filled('nombre') && $request->filled('apellidos')) ? $validatedData['nombre'] . ' ' . $validatedData['apellidos'] : null;

        $name = $validatedData['first_name'] . ' ' . $validatedData['last_name'];

        try {

            if ($request->hasFile('profile_image')) {
                $path = $request->file('profile_image')->store('profiles', 'public');
            } else {
                $path = null;
            }

            $user = User::create([
                'username' => $validatedData['username'],
                'email' => $validatedData['email'],
                'password' => bcrypt($validatedData['password']),
                'first_name' => $validatedData['first_name'],
                'last_name' => $validatedData['last_name'],
                'gender' => $validatedData['gender'],
                'birthdate' => $validatedData['birthdate'],
                'profession' => $validatedData['profession'],
                'bio' => $validatedData['bio'],
                'profile_image' => $path,
            ]);
        } catch (\Exception $e) {
            logger()->error('User creation error: ' . $e->getMessage()); // Log the error
            return redirect()->back()->withInput()->withErrors(['error' => 'Error al crear el usuario. Favor intenta de nuevo.']);
        }
    }

    public function eliminarUsuario($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('administracion')->with('success', 'Usuario eliminado');
    }
}
