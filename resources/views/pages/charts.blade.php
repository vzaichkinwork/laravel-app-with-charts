@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="col-md-6 col-md-offset-4">
            <a class="btn bg-danger" href="{{ url('create-chart/line') }}">Line</a>
            <a class="btn btn-success" href="{{ url('create-chart/bar') }}">Bar</a>
        </div>
    </div>
@endsection


