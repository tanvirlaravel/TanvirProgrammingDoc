@extends('inc.layout')

@section('content')

<h2 class="my-4 text-info text-center">Middleware</h2>

<div class="row">
    <div class="col-3">
    <div class="nav flex-column nav-pills card" id="v-pills-tab" role="tablist" aria-orientation="vertical">

<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home">Introduction</a>

<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile">Defining Middleware</a>

<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages">Registering Middleware</a>

<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings">Middleware Parameters</a>

<a class="nav-link" data-toggle="pill" href="#Fallback-Routes">Terminable Middleware</a>


</div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Introduction</h2>

                <p>Middleware provide a convenient mechanism for filtering HTTP requests entering your application. For example, Laravel includes a middleware that verifies the user of your application is authenticated. If the user is not authenticated, the middleware will redirect the user to the login screen. However, if the user is authenticated, the middleware will allow the request to proceed further into the application.</p>
                <p>Additional middleware can be written to perform a variety of tasks besides authentication. A CORS middleware might be responsible for adding the proper headers to all responses leaving your application. A logging middleware might log all incoming requests to your application.</p>
                <p>There are several middleware included in the Laravel framework, including middleware for authentication and CSRF protection. All of these middleware are located in the <code>app/Http/Middleware</code> directory.</p>
               

            </div>

            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Defining Middleware</h2>
             <h4>Before & After Middleware</h4>
             <hr>
             <h5>Before & After Middleware</h5>
             <a href="https://laravel.com/docs/6.x/middleware#defining-middleware" target="_blank">Documentation</a>

            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <h2 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Registering Middleware</h2>
             
                <ol>
                    <li>Global Middleware</li>
                    <li>Assigning Middleware To Routes</li>
                    <li>Middleware Groups</li>
                    <li>Sorting Middleware</li>
                </ol>

                <hr>
                <h4>Global Middleware</h4>
                <p> run during every HTTP request to your application</p>

                <hr>
                <h4>Assigning Middleware To Routes</h4>
               <p><a href="https://laravel.com/docs/6.x/middleware#assigning-middleware-to-routes" target="_blank">Documentation</a></p>

                <hr>
                <h5>Middleware Groups</h5>
                <a href="https://laravel.com/docs/6.x/middleware#middleware-groups" target="_blank">Documentation</a>

                <hr>
                <h5>Sorting Middleware</h5>
                <a href="https://laravel.com/docs/6.x/middleware#sorting-middleware" target="_blank">Documentation</a>

            </div>

            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Middleware Parameters</h2>
                <pre>

    public function handle($request, Closure $next, $role) {   }

    Route::put('post/{id}', function ($id) {
        //
    })->middleware('role:editor');
                </pre>
                
            </div>

            <div class="tab-pane fade" id="Fallback-Routes">
                <h2 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Terminable Middleware</h2>
                <br>
               
                <a href="https://laravel.com/docs/6.x/middleware#terminable-middleware" target="_blank">Documentation</a>

            </div>
            

        </div>
    </div>
</div>


@endsection