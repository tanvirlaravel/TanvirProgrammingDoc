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
                <hr>

                <h2>APIs based on HTTP</h2>
                <p>The most commonly used API based on HTTP is the <a href="https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest" target="_blank">XMLHttpRequest</a> API, which can be used to exchange data between a user agent and a server. The modern <a href="https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API" target="_blank">Fetch API</a> provides the same features with a more powerful and flexible feature set.</p>

                <p>Another API, <a href="https://developer.mozilla.org/en-US/docs/Web/API/Server-sent_events" target="_blank">server-sent</a> events, is a one-way service that allows a server to send events to the client, using HTTP as a transport mechanism. Using the <a href="https://developer.mozilla.org/en-US/docs/Web/API/EventSource" target="_blank">EventSource</a> interface, the client opens a connection and establishes event handlers. The client browser automatically converts the messages that arrive on the HTTP stream into appropriate <a href="https://developer.mozilla.org/en-US/docs/Web/API/Event" target="_blank">Event</a> objects, delivering them to the event handlers that have been registered for the events' <a href="https://developer.mozilla.org/en-US/docs/Web/API/Event/type" target="_blank">type</a>a> if known, or to the <a href="https://developer.mozilla.org/en-US/docs/Web/API/EventSource/onmessage" target="_blank">onmessage</a>a> event handler if no type-specific event handler was established.</p>  
                <hr>
               
            
            </div>
</div>
@endsection