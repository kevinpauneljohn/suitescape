<?php

namespace App\Http\Controllers\Teamwork;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Mpociot\Teamwork\Facades\Teamwork;
use Mpociot\Teamwork\TeamInvite;

class AuthController extends Controller
{
    /**
     * Accept the given invite.
     * @param $token
     * @return \Illuminate\Http\RedirectResponse
     */
    public function acceptInvite($token)
    {
        $invite = Teamwork::getInviteFromAcceptToken($token);
        if (! $invite) {
            abort(404);
        }

        if (auth()->check()) {
            Teamwork::acceptInvite($invite);
            auth()->user()->assignRole('Co-host');

            return redirect()->route('staycations.index')->with('success','Congrats! You are a Co-host now');;
        } else {
            session(['invite_token' => $token]);

            return redirect()->to('login');
        }
    }
}
