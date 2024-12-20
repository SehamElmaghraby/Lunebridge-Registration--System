<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Str;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');

    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        // Validate the incoming request
    $validated = $request->validate([
        'first_name' => ['required', 'string', 'max:255'],
        'last_name' => ['required', 'string', 'max:255'],
        'student_id' => ['required', 'integer', 'exists:students,student_id'], // Ensure student_id exists in the students table
        'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users'], // Ensure email is unique in the users table
        'password' => ['required', 'confirmed', Rules\Password::defaults()],

        'gpa' => 'nullable|numeric|between:0,4.0', // GPA is optional
        'student_id.exists' => 'Invalid ID number. Please provide a valid student ID.',
    ]);

    // Create the new user in the `users` table
    $user = User::create([
        'first_name' => $validated['first_name'],
        'last_name' => $validated['last_name'],
        'email' => $validated['email'], // Store email in the users table
        'student_id' => $validated['student_id'], // Store student_id in the users table
        'gpa' => $validated['gpa'] ?? null, // GPA is optional, so handle accordingly
        'password' => Hash::make($validated['password']), // Hash the password
    ]);

    // Fire the registration event and log the user in
    event(new Registered($user));
    Auth::login($user);

    // Redirect to the dashboard
    return redirect()->route('dashboard');
}
}
