<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function redirect(Request $request)
    {
        $agent = Agent::orderBy('redirects_count', 'asc')->first();
        $agent->redirects()->create([
            'ip' => $request->ip(),
        ]);
        $agent->increment('redirects_count');
        return redirect()->away($agent->link);
    }
}
