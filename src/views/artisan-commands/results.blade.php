@extends('adminlte::page')

@section('title', $title = 'Artisan Commands')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-success">
                <div class="box-header">
                    <label for=""></label>
                    <a href="{{url('artisan-commands')}}" class="btn btn-primary">Volver</a>
                </div>
            </div>
            <div class="box box-success">
                <div class="box-header">
                    <label for="">{{$title}}</label>
                </div>
                <div class="box-body">
                    <div class="col-lg-12">
                        {{'php artisan make:view '.strtolower($plural_module_name).' --resource --extends=adminlte::page --section="title:'.ucfirst($request->spanish_name).'" --section=content'}}
                    </div>
                    <br>
                    <div class="col-lg-12">
                        {{'php artisan make:model '.ucfirst($singular_module_name).' --all'}}
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
                </div>
                <div class="box-footer">
                    <button type="button" class="btn btn-default"><i class="fa fa-commands"></i> Ejecutar</button>
                </div>
            </div>
            <div class="box box-success">
                <div class="box-header">
                    <label for="">Routes-web</label>
                </div>
                <div class="box-body">
                    <div class="col-lg-12">
                        {{"Route::any('".strtolower($plural_module_name)."/data', '".ucfirst($singular_module_name)."Controller@datatable')->name('".strtolower($plural_module_name).".datatable');"}}
                    </div>
                    <br>
                    <div class="col-lg-12">
                        {{"Route::resource('".strtolower($plural_module_name)."', '".ucfirst($singular_module_name)."Controller');"}}
                    </div>
                </div>
                <div class="box-footer">
                    <button type="button" class="btn btn-default"><i class="fa fa-commands"></i> Ejecutar</button>
                </div>
            </div>
        </div>
    </div>
@endsection
