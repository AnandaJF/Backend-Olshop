<?php

namespace App\Http\Controllers;

use App\Models\Models\Transcation;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $income = Transcation::where('transcation_status', 'SUCCESS')->sum('transcation_total');
        $sales = Transcation::count();
        $items = Transcation::orderBy('id', 'DESC')->take(5)->get();
        $pie = [
            'pending' => Transcation::where('transcation_status', 'PENDING')->count(),
            'failed' => Transcation::where('transcation_status', 'FAILED')->count(),
            'success' => Transcation::where('transcation_status', 'SUCCESS')->count(),

        ];

        return view('pages.dashboard')->with([
            'income' => $income,
            'sales' => $sales,
            'items' => $items,
            'pie' => $pie
        ]);
    }
}
