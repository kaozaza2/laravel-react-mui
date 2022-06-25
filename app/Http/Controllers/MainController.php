<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MainController extends Controller
{
    public function index()
    {
        $comics = Comic::with(['comments', 'tags'])
            ->get()
            ->toArray();

        Inertia::render('Main', [
            'comics' => $comics,
        ]);
    }
}
