<?php

namespace App\Http\Controllers\Next\Dashboard;

use Inertia\Inertia;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

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
