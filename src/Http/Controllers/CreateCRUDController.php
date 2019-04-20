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
        return view('artisan-commands::results', [
            'singular_name' => str_singular($request->module_name),
            'plural_name' => $request->module_name,
            'spanish_name' => $request->spanish_name
        ]);
    }
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $plural_name = $request->plural_name;
        $singular_name = str_singular($request->plural_name);
        $prural_spanish = $request->spanish_name;
        //$singular_spanish = substr($request->spanish_name, null, -1);

        $this->createView($plural_name, $prural_spanish);
        $this->createModel($singular_name);
        $this->createSeed($singular_name);
        $this->createController($singular_name, $plural_name, $prural_spanish);
        $this->createRequest($singular_name, 'Create');
        $this->createRequest($singular_name, 'Edit');
        $this->createTest($singular_name);

        Session::flash('message', 'Los comandos fueron ejecutados correctamente.');
        return redirect()->route('artisan-commands.index');
    }
    /**
     * @param $view_module
     * @param $view_spanish_name
     */
    private function createView($plural_name, $prural_spanish)
    {
        Artisan::call('make:view', [
            'name' => strtolower($plural_name),
            '--resource' => true,
            '--extends' => 'adminlte::page',
            '--section' => ['title:'.ucfirst($prural_spanish), 'content_header', 'content'],
        ]);
    }
    /**
     * @param $model
     */
    private function createModel($singular_name)
    {
        Artisan::call('make:model', [
            'name' => ucfirst($singular_name),
            '-m' => true,
            '-f' => true
        ]);
    }

    /**
     * @param $model_singular
     * @param $model_prural
     * @param $spanish_name
     */
    private function createController($singular_name, $plural_name, $prural_spanish)
    {
        Artisan::call('make:customcontroller', [
            'name' => ucfirst($singular_name).'Controller',
            '-r' => true,
            '--routeName' => strtolower($plural_name),
            '--modelName' => ucfirst($singular_name),
            '--titleName' => ucfirst($prural_spanish),
        ]);
    }

    /**
     * @param $name
     * @param $method
     */
    private function createRequest($plural_name, $method)
    {
        Artisan::call('make:request', ['name' => ucfirst($plural_name).$method.'Request']);
    }

    /**
     * @param $name
     */
    private function createTest($singular_name)
    {
        Artisan::call('make:test', [
            'name' => ucfirst($singular_name)."Test"
        ]);
    }

    /**
     * @param string $singular_name
     */
    private function createSeed($singular_name)
    {
        Artisan::call('make:seed', [
            'name' => ucfirst($singular_name)."TableSeeder",
        ]);
    }
}
