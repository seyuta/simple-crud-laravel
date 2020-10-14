<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activations;
use App\Subscribers;
use App\Plans;
use App\Stores;

class ReportController extends Controller
{
    public function report(Request $request)
    {
        $activaions = Activations::select()
        	->join('plans', 'plans.id', '=', 'activations.plans_id')
        	->where('plans.plan_name', 'like', '%'.$request->plan_name.'%')
        	->where('periode', 'like', '%'.$request->periode.'%')
        	->get();

        return view('dtReport', ['activations' => $activaions]);
    }
}
