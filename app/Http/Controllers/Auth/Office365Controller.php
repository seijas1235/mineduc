<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class Office365Controller extends Controller
{
    /**
     * Redirect the user to the Office 365 authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToOffice365()
    {
        return Socialite::driver('office365')->redirect();
    }

    /**
     * Obtain the user information from Office 365.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleOffice365Callback()
    {
        try {
            $user = Socialite::driver('office365')->user();
            $email = $user->getEmail();

            // Find user by email
            $existingUser = User::where('email', $email)->first();

            if ($existingUser) {
                Auth::login($existingUser);
                return redirect('/dashboard');
            } else {
                return redirect('/login')->withErrors([
                    'email' => 'Correo no autorizado. Contacte al administrador.'
                ]);
            }
        } catch (\Exception $e) {
            return redirect('/login')->withErrors([
                'email' => 'Error al autenticar con Office 365. Por favor intente nuevamente.'
            ]);
        }
    }
}