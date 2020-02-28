<?php

namespace App\Http\Controllers;

use App\User;
use Inertia\Inertia;

class ArtistsController extends Controller
{
    public function index()
    {
        $artists = User::with('media')
            ->whereNotNull('artist_verified_at')
            ->get();

        return Inertia::render('Artists/List', compact('artists'));
    }
}
