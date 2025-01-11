<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class ImpersonateController extends Controller
{
    public function impersonate(User $user)
    {
        // Check if the authenticated user is allowed to impersonate
        if (!$this->canImpersonate($user)) {
            abort(403, 'Unauthorized action.');
        }

        // Impersonate the user
        Auth::login($user);

        // Redirect to dashboard or wherever you want
        return redirect('/dashboard')->with('success', 'You are now impersonating ' . $user->name);
    }

    public function stopImpersonating()
    {
        // Check if the user is impersonating
        if (!Auth::user()->isImpersonated()) {
            abort(403, 'You are not impersonating anyone.');
        }

        // Log out the impersonated user
        Auth::logout();

        // Redirect to dashboard or wherever you want
        return redirect('/dashboard')->with('success', 'You have stopped impersonating.');
    }

    private function canImpersonate(User $user)
    {
        // Example: Allow only specific users to impersonate others, allow all users to impersonate
        return in_array($user->id, User::all()->pluck('id')->toArray());
    }
}
