<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use App\Models\Flight;
use Illuminate\Support\Facades\Auth;


class FlightController extends Controller
{
    public function index()
    {
        $users = User::all();
        $user_id = Auth::id();
        $flights = Flight::findOrFail($user_id);
        if ($flights->eat === 1){
            $flights->eat = '食事あり';
        } else {
            $flights->eat = '食事なし'; 
        }

        return Inertia::render('Flights/Index', [
            'users' => $users,
            'flights' => $flights,
        ]);
    }
}
