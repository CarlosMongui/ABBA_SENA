<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'string', 'max:10', 'unique:users'],
            'birth_date' => ['required', 'date', "before: -18 years"],
        ], [
            'name.max' => 'JAJAJAJA de verdad pusiste un nombre tan largo?',

            'email.unique' => 'Ese correo ya esta siendo usado.',
            'email.max' => 'JAJAJAJA de verdad pusiste un correo tan largo?',
            
            'phone.unique' => 'Ese número ya esta siendo usado.',
            'phone.max' => 'Este espacio no puede ocupar mas de 10 caracteres.',

            'password.confirmed' => 'Los campos de la contraseña no coinciden.',

            'birth_date.before' => 'Debes tener al menos 18 años.',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'birth_date' => $data['birth_date'],
        ]);
    }

    protected function destroy(User $user)
    {
        $user->delete();

        return back();
    }
}
