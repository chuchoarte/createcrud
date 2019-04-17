@extends('adminlte::page')

@section('title', $title = 'Artisan Commands')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-success">
                <div class="box-header">
                    <label for="">{{$title}}</label>
                </div>
                {!! Form::open() !!}
                <div class="box-body">
                    <div class="col-lg-3">
                        {!! Field::text('module_name', ['placeholder' => 'Plural']) !!}
                    </div>
                    <div class="col-lg-3">
                        {!! Field::text('spanish_name', ['placeholder' => 'Plural']) !!}
                    </div>
                </div>
                <div class="box-footer">
                    <div class="col-lg-12">
                        {!! Form::button('<i class="fa fa-save"></i> Ejecutar', ['class' => 'btn btn-success', 'type' => 'submit']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
