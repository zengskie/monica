<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    /**
     * Test.
     *
     * @return Response|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function index()
    {
        return Inertia::render('Home/Index', [
            'user' => auth()->user(),
        ]);
    }
}
