@extends('layouts.masters')

@section('content')
<div class="container">
    <div class="card p-2">
        <div class="row">
            <div class="col-md-10 mx-auto col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Financial Year</div>

                    <div class="panel-body">
                        {!! Form::model($financialYear, ['route' => ['financial_years.update', $financialYear->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}

                        <div class="form-group{{ $errors->has('start_date') ? ' has-error' : '' }}">
                            {!! Form::label('name', 'Name', ['class' => 'col-md-4 control-label']) !!}

                            <div class="col-md-8">
                                {!! Form::number('name', null, ['class' => 'form-control', 'required' => 'required']) !!}

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            <div class="form-group{{ $errors->has('start_date') ? ' has-error' : '' }}">
                                {!! Form::label('start_date', 'Start Date', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-8">
                                    {!! Form::date('start_date', null, ['class' => 'form-control', 'required' => 'required']) !!}

                                    @if ($errors->has('start_date'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('start_date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('end_date') ? ' has-error' : '' }}">
                                {!! Form::label('end_date', 'End Date', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-8">
                                    {!! Form::date('end_date', null, ['class' => 'form-control', 'required' => 'required']) !!}

                                    @if ($errors->has('end_date'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('end_date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    {!! Form::submit('update', ['class' => 'btn btn-block btn-info float-end']) !!}
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
