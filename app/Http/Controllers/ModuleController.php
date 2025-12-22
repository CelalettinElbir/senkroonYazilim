<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function index()
    {
        $modules = Module::where('is_active', true)
            ->orderBy('order')
            ->get();

        return view('modules.index', compact('modules'));
    }

    public function show(Module $module)
    {
        abort_if(!$module->is_active, 404);

        return view('modules.show', compact('module'));
    }
}
