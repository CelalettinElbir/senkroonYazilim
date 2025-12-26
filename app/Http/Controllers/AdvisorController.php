<?php

namespace App\Http\Controllers;

use App\Models\Advisor;
use Illuminate\Http\Request;

class AdvisorController extends Controller
{

    public function index()
    {
       $advisors = Advisor::all();



        return view('advisors.index',compact('advisors'));
    }
    public function show($slug)
    {
        $advisor = Advisor::where('slug', $slug)->firstOrFail();

        return view('advisors.show', compact('advisor'));
    }
}
