<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use App\Models\Flight;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use App\Http\Requests\ScheduleRequest;


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
    public function createSchedule()
    {

        return Inertia::render('Schedules/Create', [
            
        ]);
    }
    public function listSchedule()
    {
        $user_id = Auth::id();
        $schedules = Schedule::find($user_id);
        if (is_null($schedules)){
            return to_route('schedule.create');
        }
        $schedules = $schedules->orderBy('date', 'asc')->get()->toArray();
        // $formattedSchedules = array_map(function ($schedule) {
        //     $schedule['start_time'] = Carbon::parse($schedule['start_time'])->format('H:i');
        //     return $schedule;
        // }, $schedules);
        $formated_date = [];
        foreach($schedules as $schedule){
            $schedule['start_time'] = Carbon::parse($schedule['start_time'])->format('H:i');
            $schedule['date'] = Carbon::parse($schedule['date'])->format('m-d');
            $formated_date[] = $schedule;
        }   
        
        return Inertia::render('Schedules/List', [
            'schedules' => $formated_date,
        ]);
    }
    public function detailSchedule($id)
    {
        $schedules = Schedule::findOrFail($id);
        $user = Schedule::findOrFail($id)->user->toArray();
        $schedules['start_time'] = Carbon::parse($schedules['start_time'])->format('H:i');
        $schedules['finish_time'] = Carbon::parse($schedules['finish_time'])->format('H:i');
        return Inertia::render('Schedules/Detail', [
            'schedules' => $schedules,
            'user' => $user,
        ]);
    }

    public function storeSchedule(ScheduleRequest $request)
    {
        $user_id = Auth::id();
        $schedule = new Schedule;
        $schedule->user_id = $user_id;
        $schedule->title = $request->title;
        $schedule->date = $request->date;
        $schedule->start_time = $request->start_time;
        $schedule->finish_time = $request->finish_time;
        $schedule->url = $request->url;
        $schedule->memo = $request->memo;
        $schedule->save();
    
        return redirect()->route('schedule.list');
    }
}
