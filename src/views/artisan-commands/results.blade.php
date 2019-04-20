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
                        "Route::any('".strtolower($plural_name)."/datatable', '".ucfirst($singular_name)."Controller@datatable')->name('".strtolower($plural_name).".datatable');"
                    </div>
                    <br>
                    --}}
                    <div class="col-lg-12">
                        {{"Route::resource('".strtolower($plural_name)."', '".ucfirst($singular_name)."Controller');"}}
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
                        {{'php artisan make:view '.strtolower($plural_name).' --resource --extends=adminlte::page --section="title:'.ucfirst($spanish_name).'" --section=content'}}
                    </div>
                    <br>
                    <div class="col-lg-12">
                        {{'php artisan make:model '.ucfirst($singular_name).' -m -f'}}
                    </div>
                    <br>
                    <div class="col-lg-12">
                        {{'php artisan make:customcontroller '.ucfirst($singular_name).'Controller -r --routeName='.strtolower($plural_name).' --modelName='.ucfirst($singular_name).' --titleName='.ucfirst($spanish_name)}}
                    </div>
                    <br>
                    <div class="col-lg-12">
                        {{'php artisan make:request '.ucfirst($singular_name).'CreateRequest'}}
                    </div>
                    <br>
                    <div class="col-lg-12">
                        {{'php artisan make:request '.ucfirst($singular_name).'EditRequest'}}
                    </div>
                    <br>
                    <div class="col-lg-12">
                        {{'php artisan make:test '.ucfirst($singular_name).'Test'}}
                    </div>
                    <br>
                    <div class="col-lg-12">
                        {{'php artisan make:seed '.ucfirst($singular_name).'TableSeeder'}}
                    </div>
                    <br>
                    <div class="col-lg-12">
                        {!! Field::hidden('plural_name', $plural_name) !!}
                        {!! Field::hidden('spanish_name', $spanish_name) !!}
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
