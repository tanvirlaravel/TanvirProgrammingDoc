@extends('inc.layout')

@section('content')


<h1 class="my-4 text-info text-center">Chapter 3. Routing & Controller</h1>

<div class="row">
    <div class="col-4">
        <ul class="list-group position-fixed" id="sidebar_menu">         
        </ul>
    </div>

    <div class="col-8">

        <h2 class="text-success">Introduction</h2>
        <p>The essential function of any web application framework is to take requests from a user and deliver responses, usually via HTTP(S). This means defining an application’s routes is the first and most important project to tackle when learning a web frame‐ work.</p>
        <hr>

        <h2 class="text-success">What Is MVC</h2>
        <p><strong>model</strong></p>
        <p>Represents an individual database table (or a record from that table)—think “Company” or “Dog.”</p>
        <p><strong>view</strong></p>
        <p>Represents the template that outputs your data to the end user—think “the login page template with this given set of HTML and CSS and JavaScript.”</p>
        <p><strong>controller</strong></p>
        <p>Like a traffic cop, takes HTTP requests from the browser, gets the right data out of the database and other storage mechanisms, validates user input, and eventu‐ ally sends a response back to the user.</p>

        <p><img src="{{ asset('img/oReally/mvc.png') }}" class="img-fluid" alt=""></p>
        <p>
            In Figure, you can see that the end user will first interact with the controller by sending an HTTP request using their browser. The controller, in response to that request, may write data to and/or pull data from the model (database). The controller will then likely send data to a view, and then the view will be returned to the end user to display in their browser.
        </p>
        <hr>

        <h2 class="text-success">HTTP Verbs</h2>
        <p>The most common HTTP verbs are GET and POST, followed by PUT and DELETE. There are also HEAD, OPTIONS, and PATCH, and two others that are pretty much never used in normal web development, TRACE and CONNECT.</p>

        <pre class="py-2 bg-dark text-white">
            GET
                Request a resource (or a list of resources).
            HEAD
                Ask for a headers-only version of the GET response.
            POST
                Create a resource.
            PUT
                Overwrite a resource.                
            PATCH
                 Modify a resource.
            DELETE
                Delete a resource.
            OPTIONS
                Ask the server which verbs are allowed at this URL.                
        </pre>
        <hr>

        <h2 class="text-success">What’s a Closure?</h2>
        <p>
            Closures are PHP’s version of anonymous functions. A closure is a function that you can pass around as an object, assign to a variable, pass as a parameter to other func‐ tions and methods, or even serialize.
        </p>
        <hr>

        <h2 class="text-success">Quick Introduction to Middleware</h2>
        <p>You might be wondering, “Why am I returning ‘Hello, World!’ instead of echoing it?”
            
            </p>
            <p>There are quite a few answers, but the simplest is that there are a lot of wrappers around Laravel’s request and response cycle, including something called middleware. When your route closure or controller method is done, it’s not time to send the output to the browser yet; returning the content allows it to continue flowing through the response stack and the middleware before it is returned back to the user.</p>
            <hr>

            <h2 class="text-success">Static Calls</h2>
            <p>If you have much experience developing with PHP, you might be surprised to see static calls on the Route class. This is not actually a static method per se, but rather service location using Laravel’s facades</p>
            <p>If you prefer to avoid facades, you can accomplish these same defi‐ nitions like this:</p>

            <pre class="py-2 bg-dark text-white">
                $router->get('/', function () {
                    return 'Hello, World!';
                });                    
            </pre>
            <hr>

            <h2 class="text-success">Route Names</h2>
            <p>
                &lt;a href="&lt;?php <code>echo url('/');</code> ?>">
            </p>
            <hr>

            <h2 class="text-success">Rate limiting</h2>
            <p>If you need to limit users to only accessing any give route(s) a certain number of times in a given time frame (called rate limiting, and most common with APIs),there’s an out-of-the-box middleware for that in version 5.2 and above. Apply the throttle middleware, which takes two parameters: the first is the number of tries a user is permitted and the second is the number of minutes to wait before resetting the attempt count
                </p>
            <pre class="bg-dark text-white py-2">
            Route::middleware('auth:api', 'throttle:60,1')->group(function () { 
                Route::get('/profile', function () {
                //
            });                    
            </pre>

        
 

        

       
        






    
    <p class="my-5">.</p>
    </div>
</div>


@endsection