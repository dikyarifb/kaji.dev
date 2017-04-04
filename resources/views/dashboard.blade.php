@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <a href="{{ URL('/career') }}" class="panel-box">CAREER</a>
        </div>
        <div class="col-md-4">
            <a href="#" class="panel-box not-available">NOT AVAILBALE YET</a>
        </div>
         <div class="col-md-4">
            <a href="#" class="panel-box not-available">NOT AVAILBALE YET</a>
        </div>
    </div>
    <div class="row">
         <div class="col-md-4">
            <a href="#" class="panel-box not-available">NOT AVAILBALE YET</a>
        </div>
        <div class="col-md-4">
            <a href="#" class="panel-box not-available">NOT AVAILBALE YET</a>
        </div>
         <div class="col-md-4">
            <a href="#" class="panel-box not-available">NOT AVAILBALE YET</a>
        </div>
    </div>
</div>
@endsection
