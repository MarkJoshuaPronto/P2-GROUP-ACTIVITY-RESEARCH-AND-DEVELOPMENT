<?php

// app/Http/Controllers/ResetPasswordController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ResetPasswordController extends Controller
{
    public function showResetForm()
    {
        return view('reset-password');
    }

    public function resetPassword(Request $request)
    {
        // Retrieve the authenticated user
        $user = Auth::user();

        // Validate user input
        $data = $request->validate([
            'password' => 'required|string|min:8|confirmed', // Password confirmation validation
        ]);

        // Update user password using the User model
        User::where('id', $user->id)->update([
            'password' => Hash::make($data['password']), // Hash the new password
        ]);

        // Redirect to hello page with success message
        return redirect()->route('hello')->with('success', 'Password reset successfully');
    }
}
