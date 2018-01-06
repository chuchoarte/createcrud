<?php

namespace jespitia\createcrud\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateCRUDController extends Controller
{
    public function index()
    {
        return view('artisan-commands::index');
    }

    public function store(Request $request)
    {
        $singular_module_name = substr($request->module_name, null, -1);
        $plural_module_name = $request->module_name;
        return view('artisan-commands::results', compact([
            'request',
            'singular_module_name',
            'plural_module_name'
        ]));
    }

}
