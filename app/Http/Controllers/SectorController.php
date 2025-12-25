<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sector;

class SectorController extends Controller
{
    public function index()
    {
        $sectors = Sector::query()
            ->where('is_active', true)
            ->orderBy('name')
            ->get();

        return view('sectors.index', ['sectors' => $sectors]);
    }

    public function show(string $slug)
    {
        $sector = Sector::where('slug', $slug)->where('is_active', true)->first();

        if (! $sector) {
            abort(404);
        }

        return view('sectors.show', ['sector' => $sector]);
    }


}
