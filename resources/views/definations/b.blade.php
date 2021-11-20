@extends('inc.layout')

@section('content')

<div class="row">
    <div class="col">
    <h1 class="mb-4 mt-1 text-primary heding-one">A</h1>
    <hr id="top-heading">
    </div>
</div>

<div class="row">

    <div class="col-3">
            <ul class="list-group position-fixed" id="sidebar_menu">         
            </ul>
        </div>

            <div class="col-md-9">
                <h2>Anonymous function</h2>
                <p> a closure in PHP is a function that can be created without a specified name - an anonymous function</p>
                <hr>

                <h2>Aggregate functions - MySQL</h2>
                <p>MySQL aggregate functions retrieve a single value after performing a calculation on a set of values.</p>
                <p>In general, aggregate functions ignore null values.</p>
                <strong>AVG()</strong> /
                <strong>COUNT()</strong> /
                <strong>COUNT(DISTINCT)</strong> /
                <strong>MAX()</strong>
               
            
            </div>
</div>
@endsection