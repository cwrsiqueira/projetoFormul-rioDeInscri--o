<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $subscriptions = Subscription::orderBy('id', 'desc')->get();
        return view('dashboard', [
            'subs' => $subscriptions
        ]);
    }

    public function detalhar($id)
    {
        $subscription = Subscription::find($id);
        return view('subscription', [
            'sub' => $subscription
        ]);
    }

    public function change_status(Request $request, $id)
    {
        $subscription = Subscription::find($id);
        $subscription->status = $request->input('status');
        $subscription->obs = $request->input('obs');
        $subscription->save();

        return view('subscription', [
            'sub' => $subscription
        ]);
    }
}