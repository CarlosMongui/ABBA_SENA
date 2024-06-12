<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class UserController extends Controller
{

    public function config(Request $request)
    {
        $user = Auth::user();
        return view("config", [
            "user" => $user,
            "age" => Carbon::parse($user->birth_date)->age
        ]);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'nullable|email|confirmed',
            'name' => 'nullable|string|max:255|confirmed',
            'password' => 'nullable|string|min:8|confirmed',
            'phone' => 'nullable|string|max:10|confirmed',
        ], [
            'email.confirmed' => 'La confirmación del correo electrónico no coincide.',

            'name.confirmed' => 'La confirmación del nombre no coincide.',

            'password.confirmed' => 'La confirmación de la contraseña no coincide.',

            'phone.confirmed' => 'La confirmación del número de telefono no coincide.',
        ]);
    
        $dataToUpdate = array_filter($validatedData, function ($value) {
            return !is_null($value) && $value !== '';
        });
    
        if (array_key_exists('password', $dataToUpdate)) {
            $dataToUpdate['password'] = bcrypt($dataToUpdate['password']);
        }
    
        $user = auth()->user();
        $user->update($dataToUpdate);
    
        return redirect()->back()->with('success', 'Perfil actualizado exitosamente.');
        
    }
    
    public function destroy(User $user)
    {
        $user->destroy($user->id);

        return redirect("");
    }
}