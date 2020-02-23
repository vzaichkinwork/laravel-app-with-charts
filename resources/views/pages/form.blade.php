@extends('layouts.default')

<!-- display success message -->
@if (Session::has('message'))
    <div class="alert alert-success">{{ Session::get('message') }}</div>
@endif

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Complete form</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/save') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" >

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('family_name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Family name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="family_name" value="{{ old('family_name') }}" >

                                @if ($errors->has('family_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('family_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Age</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="age" value="{{ old('age') }}" >

                                @if ($errors->has('age'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="phone" value="{{ old('phone') }}" >

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('average_salary') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Average salary</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="average_salary" value="{{ old('average_salary') }}" >

                                @if ($errors->has('average_salary'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('average_salary') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="gender" value="{{ old('gender') }}" >

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('birth_date') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Birth date</label>

                            <div class="col-md-6">
                                <input id="name" type="date" class="form-control" name="birth_date" value="{{ old('birth_date') }}" >

                                @if ($errors->has('birth_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birth_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                                <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
