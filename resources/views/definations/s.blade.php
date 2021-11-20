@extends('inc.layout')

@section('content')

<div class="row">
    <div class="col">
    <h1 class="mb-4 mt-1 text-primary heding-one">M</h1>
    <hr id="top-heading">
    </div>
</div>

<div class="row">

    <div class="col-3">
            <ul class="list-group position-fixed" id="sidebar_menu">         
            </ul>
        </div>

            <div class="col-md-9">
                <h2>service providers</h2>
                <p>Service providers in laravel application is the central place where application is bootstrapped. That is, laravel’s core services and our application’s services, classes and their dependencies are injected in service container through providers. </p>

                <p>When your app runs, it requires additional code, often packaged as "services" (See the "app/Services" folder) to get things done.</p>
                <p>

                    "Service Providers" are Laravel's way of packaging and managing the code needed to load these additional "services" (or running other code) at app bootup.</p>
                <p>

                    They are run in 2 phases - "register", and "boot"; each one defined by a same-named method on the provider.</p>
                <p>

                    The list of service providers for your app is listed in config/app.php, and this is how you specify which ones will run, and in what order (you don't need to run all of the service providers in the services folder, you can just keep them there, doing nothing).</p>

                <p>

                    When Laravel boots, it looks at the list, loads the right Providers, which in turn have their register() and boot() methods called at the right time.</p>
                <p>

                    Then the rest of the app boots, and subsequent tasks which need access to any "services" loaded by the "service providers", have them.</p>

                <p>Basically, features are wrapped up in ‘services’ that can be added or removed from the application, by adding or removing the corresponding service provider class. So things like routing, mail, etc. are services, and their functionality added to the Laravel framework via their service providers.</p>
                <p>If you open the config/app.php file included with Laravel, you will see a providers array. These are all of the service provider classes that will be loaded for your application</p>

                
               
            
            </div>
</div>
@endsection