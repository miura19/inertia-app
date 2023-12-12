<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use App\Models\Flight;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;


class FlightController extends Controller
{
    public function index()
    {
        $users = Auth::user();
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
    public function showSchedule()
    {

        return Inertia::render('Flights/Schedule', [
            
        ]);
    }

    public function storeSchedule(Request $request)
    {
        $user_id = Auth::id();
        $schedule = new Schedule;
        $schedule->user_id = $user_id;
        $schedule->title = $request->title;
        $schedule->date = $request->date;
        $schedule->start_time = $request->start_time;
        $schedule->finish_time = $request->finish_time;
        $schedule->memo = $request->memo;
        $schedule->save();
        return Inertia::render('Flights/Schedule', [
            
        ]);
    }
}
