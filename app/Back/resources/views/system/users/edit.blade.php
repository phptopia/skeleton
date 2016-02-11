@extends('back::app')

@section('page-name', 'system users')

@section('page-title')
    <h1>Users</h1>
@stop

@section('page-actions')
    <a href="{{ route('back.system.users.index') }}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</a>
@stop

@section('content')
    <div class="panel panel-brand">
        <div class="panel-heading">
            <h3 class="panel-title">Edit user</h3>
        </div>
        <div class="panel-body">
            {!! Form::model($record, ['route' => ['back.system.users.update', $record->id], 'method' => 'put']) !!}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    {!! Form::openGroup('name', 'Name') !!}
                    {!! Form::text('name') !!}
                    {!! Form::closeGroup() !!}
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    {!! Form::openGroup('email', 'Email') !!}
                    {!! Form::text('email') !!}
                    {!! Form::closeGroup() !!}
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    {!! Form::openGroup('password', 'Password') !!}
                    {!! Form::password('password') !!}
                    {!! Form::closeGroup() !!}
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-brand">Save</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop