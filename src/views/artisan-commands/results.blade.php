@extends('adminlte::page')

@section('title', $title = 'Artisan Commands')

@section('content')
    <div class="row">
        @if(Session::has('message'))
            <div class="col-lg-12">
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <p>{{ Session::get('message') }}</p>
                </div>
            </div>
        @endif
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-success">
                <div class="box-header">
                    <label for=""></label>
                    <a href="{{url('artisan-commands')}}" class="btn btn-primary"><i class="fa fa-undo"></i> Volver</a>
                </div>
            </div>
            <div class="box box-success">
                <div class="box-header">
                    <label for="">Rutas-web</label>
                </div>
                <div class="box-body">
                    {{--
                    <div class="col-lg-12">
                        "Route::any('".strtolower($plural_module_name)."/datatable', '".ucfirst($singular_module_name)."Controller@datatable')->name('".strtolower($plural_module_name).".datatable');"
                    </div>

                    <br>
                    --}}
                    <div class="col-lg-12">
                        {{"Route::resource('".strtolower($plural_module_name)."', '".ucfirst($singular_module_name)."Controller');"}}
                    </div>
                </div>
            </div>
            <div class="box box-primary">
                {!! Form::open(['url' => 'artisan-commands', 'method' => 'PUT']) !!}
                <div class="box-header">
                    <label for="">Ejecutar Comandos</label>
                </div>
                <div class="box-body">
                    <div class="col-lg-12">
                        {{'php artisan make:view '.strtolower($plural_module_name).' --resource --extends=adminlte::page --section="title:'.ucfirst($request->spanish_name).'" --section=content'}}
                    </div>
                    <br>
                    <div class="col-lg-12">
                        {{'php artisan make:model '.ucfirst($singular_module_name).' -m -f'}}
                    </div>
                    <br>
                    <div class="col-lg-12">
                        {{'php artisan make:customcontroller '.ucfirst($singular_module_name).'Controller -r --routeName='.strtolower($plural_module_name).' --modelName='.ucfirst($singular_module_name).' --titleName='.ucfirst($request->spanish_name)}}
                    </div>
                    <br>
                    <div class="col-lg-12">
                        {{'php artisan make:request '.ucfirst($singular_module_name).'CreateRequest'}}
                    </div>
                    <br>
                    <div class="col-lg-12">
                        {{'php artisan make:request '.ucfirst($singular_module_name).'EditRequest'}}
                    </div>
                    <br>
                    <div class="col-lg-12">
                        {{'php artisan make:test '.ucfirst($singular_module_name).'Test --phpunit'}}
                    </div>
                    <br>
                    <div class="col-lg-12">
                        {!! Field::hidden('view_module', strtolower($plural_module_name)) !!}
                        {!! Field::hidden('view_spanish_name', ucfirst($request->spanish_name)) !!}
                    </div>
                    <div class="col-lg-12">
                        {!! Field::hidden('model', ucfirst($singular_module_name)) !!}
                        {!! Field::hidden('model_prural', strtolower($plural_module_name)) !!}
                    </div>
                    <div class="col-lg-12">
                        {!! Field::hidden('requests', ucfirst($singular_module_name)) !!}
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-success"><i class="fa fa-terminal"></i> Ejecutar</button>
                </div>
                {!! Form::close() !!}
            </div>

        </div>
    </div>
@endsection
