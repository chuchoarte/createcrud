<?php

namespace jespitia\createcrud\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;

class CreateCRUDController extends Controller
{
    public function index()
    {
        return view('artisan-commands::index');
    }

    public function create(Request $request)
    {
        $singular_module_name = substr($request->module_name, null, -1);
        $plural_module_name = $request->module_name;
        return view('artisan-commands::results', [
            'request' => $request,
            'singular_module_name' => $singular_module_name,
            'plural_module_name' => $plural_module_name
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->createView($request->view_module, $request->view_spanish_name);
        $this->createModel($request->model);
        $this->createController($request->model, $request->model_prural, $request->view_spanish_name);
        $this->createRequest($request->requests, 'Create');
        $this->createRequest($request->requests, 'Edit');

        Session::flash('message', 'Los comandos fueron ejecutados correctamente.');
        return redirect()->route('artisan-commands.index');
    }

    /**
     * @param $view_module
     * @param $view_spanish_name
     */
    private function createView($view_module, $view_spanish_name)
    {
        Artisan::call('make:view', [
            'name' => $view_module,
            '--resource' => true,
            '--extends' => 'adminlte::page',
            '--section' => ['title:'.$view_spanish_name, 'content_header', 'content'],
        ]);
    }

    /**
     * @param $model
     */
    private function createModel($model)
    {
        Artisan::call('make:model', [
            'name' => $model,
            '-m' => true,
            '-f' => true
        ]);
    }

    private function createController($model_singular, $model_prural, $spanish_name)
    {
        Artisan::call('make:customcontroller', [
            'name' => ucfirst($model_singular).'Controller',
            '-r' => true,
            '--routeName' => strtolower($model_prural),
            '--modelName' => ucfirst($model_singular),
            '--titleName' => ucfirst($spanish_name),
        ]);
    }

    /**
     * @param $request
     * @param $method
     */
    private function createRequest($request, $method)
    {
        Artisan::call('make:request', ['name' => $request.$method.'Request']);
    }
}
