<?php

namespace App\Http\Controllers\Next\Dashboard;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Illuminate\Http\Response;

class DashboardController extends Controller
{
    /**
     * Display the user home page.
     *
     * @return Response
     */
    public function index()
    {
        return Inertia::render('Dashboard/Index', [
            'user' => auth()->user(),
        ]);
    }
}
