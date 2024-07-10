<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TrainsController extends Controller
{
    public function trains() {

        $trains = Train::all();

        return view('trains', compact('trains'));
    }

    public function trainToDay() {

        $today = Carbon::today()->format('Y-m-d');

        $trains_today = Train::whereDate('departure_date', $today)->get();

        return view('trainsToDay', compact('trains_today'));

    }

    public function trainNextDay() {

        $tomorrow = Carbon::tomorrow()->format('Y-m-d');

        $trains_nextday = Train::whereDate('departure_date', $tomorrow)->get();

        return view('trainsNextDay', compact('trains_nextday'));

    }



}
