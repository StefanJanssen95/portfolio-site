<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
	/**
	 * Handle an authentication attempt.
	 *
	 * @return Response
	 */
	public function authenticate()
	{
		if (Auth::attempt(['email' => $email, 'password' => $password])) {
			// Authentication passed...
			return redirect()->intended('dashboard');
		}
	}
}