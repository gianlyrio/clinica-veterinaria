<?php

namespace App\Http\Controllers;

use Illluminate\Http\Resquest;
use App\Models\Animal;
Use App\Models\Exam;
Use App\Models\Consultations;
use App\Models\Tutors;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController index()
{
    public function index()
    {
        //1. Indicadores Principais
        $totalTutor = Tutor::count();
        $totalAnimals = Animal::count();
        $todayAppointments = Consultation::whereDate('date_time',
        Carbon::today())->count();
        $montRevenue = Consultation::whereMont('date_time', Carbon::now()->year)
        -> 
    }
}