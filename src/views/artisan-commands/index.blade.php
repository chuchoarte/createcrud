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
                    <label for="">{{$title}}</label>
                </div>
                {!! Form::open() !!}
                <div class="box-body">
                    <div class="col-lg-3">
                        {!! Field::text('module_name', ['placeholder' => 'Plural', 'label' => 'Nombre del Módulo (inglés)']) !!}
                    </div>
                    <div class="col-lg-3">
                        {!! Field::text('spanish_name', ['placeholder' => 'Plural', 'label' => 'Nombre en Español']) !!}
                    </div>
                </div>
                <div class="box-footer">
                    <div class="col-lg-12">
                        {!! Form::button('<i class="fa fa-terminal"></i> Ejecutar', ['class' => 'btn btn-success', 'type' => 'submit']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
