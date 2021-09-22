@extends('inc.layout')

@section('content')
<h2 class="my-4 text-info text-center">Routing</h2>

<div class="row">
    <div class="col-3">
        <div class="nav flex-column nav-pills card" id="v-pills-tab" role="tablist" aria-orientation="vertical">

            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home">Basic Routing</a>
        
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile">Route Parameters</a>
        
            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages">Named Routes</a>
        
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings">Route Groups</a>
        
            <a class="nav-link" data-toggle="pill" href="#Route-Model-Binding">Route Model Binding</a>
        
            
            <a class="nav-link" data-toggle="pill" href="#Fallback-Routes">Fallback Routes<span class="badge badge-warning">W</span></a>
            <a class="nav-link" data-toggle="pill" href="#Rate-Limiting">Rate Limiting<span class="badge badge-warning">W</span></a>
            <a class="nav-link" data-toggle="pill" href="#FormMethodSpoofing">Form Method Spoofing</a>
            <a class="nav-link" data-toggle="pill" href="#AccessingTheCurrentRoute">Accessing The Current Route</a>
        
        
        </div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Basic Routing</h2>
                <hr>
                <ol>
                    <li>The Default Route Files</li>
                    <li>Available Router Methods</li>
                    <li>CSRF Protection</li>
                    <li>Redirect Routes</li>
                    <li>View Routes</li>                  
                </ol>
              
                
                <h4>The Default Route Files</h4>
                <p>The <code>routes/web.php</code> file defines routes that are for your web interface. These routes are assigned the <code>web</code> middleware group, which provides features like session state and CSRF protection. The routes in <code>routes/api.php</code> are stateless and are assigned the <code>api</code> middleware group.</p>
                <p>Routes defined in the <code>routes/api.php</code> file are nested within a route group by the <code>RouteServiceProvider</code>. Within this group, the <code>/api</code> URI prefix is automatically applied so you do not need to manually apply it to every route in the file. You may modify the prefix and other route group options by modifying your <code>RouteServiceProvider</code> class.</p>                
                <hr>

                <h4>Available Router Methods</h4>
                <pre class="bg-dark text-white">

               get, post, put, patch, delete, options

                //route that responds to multiple HTTP verbs.
                Route::match(['get', 'post'], '/', function () {
                        //
                });

                //route that responds to all HTTP verbs using the any method:
                Route::any('/', function () {
                    //
                });

                </pre>
                


                <hr>
                <h5>CSRF Protection</h5>
                <p>Any HTML forms pointing to <code>POST, PUT, or DELETE</code> routes  that are defined in the web routes file should include a CSRF token field. Otherwise, the request will be rejected.</p>
                <p><code>@@csrf</code></p>
                <hr>              

                <h4>Redirect Routes</h4>
                <p><code>Route::redirect('/here', '/there');</code>
                    <p>By default, <code>Route::redirect</code> returns a <code>302</code> status code. You may customize the status code using the optional third parameter:</p>
                <p><code>Route::redirect('/here', '/there', 301);</code>
                <hr>

                <h4>View Routes</h4>
                <pre class="bg-dark text-white">

                Route::view('/welcome', 'welcome');

                Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

                </pre>

           

            </div>

            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Route Parameters</h2>

                <ol>
                    <li>Required Parameters</li>
                    <li>Optional Parameter</li>
                    <li>Regular Expression Constraints</li>
                </ol>

                <hr>
                <h5>Required Parameters</h5>
                <p>Nothing</p>
                <hr>
                <h5>Optional Parameters</h5>
                <code>Route::get('user/{name?}'</code>

                <hr>
                <h5>Regular Expression Constraints</h5>
                <a href="https://laravel.com/docs/6.x/routing#parameters-regular-expression-constraints" target="_blank">Documentation</a> 

            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Named Routes</h4>
               
                <pre>
    Route::get('user/profile', function () {
        //
    })->name('profile');

    Route::get('user/profile', 'UserProfileController@show')->name('profile');

    <hr>

    // Generating URLs...
    $url = route('profile');

    // Generating Redirects...
    return redirect()->route('profile');

    <hr>

    Route::get('user/{id}/profile', function ($id) {
        //
    })->name('profile');

    $url = route('profile', ['id' => 1]);

    <hr>
                </pre>

<p>If you pass additional parameters in the array, those key / value pairs will automatically be added to the generated URL's query string:</p>
<pre>
        Route::get('user/{id}/profile', function ($id) {
            //
        })->name('profile');

        $url = route('profile', ['id' => 1, 'photos' => 'yes']);

        // /user/1/profile?photos=yes
</pre>
               <hr>
               <h4>Inspecting The Current Route</h4>
               <code>if ($request->route()->named('profile')) </code>
               <p class="mb-5"></p>
            </div>

            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Route Groups</h4>
              
                <ol>
                    <li>Middleware</li>
                    <li>Namespaces</li>
                    <li>Subdomain Routing</li>
                    <li>Route Prefixes</li>
                    <li>Route Name Prefixes</li>
                </ol>

                <hr>
                <p>Route groups allow you to share route attributes, such as middleware or namespaces, across a large number of routes without needing to define those attributes on each individual route. </p>

                <hr>
                <h5>Middleware</h5>
                <a href="https://laravel.com/docs/6.x/routing#route-group-middleware" target="_blank">Documentation</a>

                <hr>
                <h5>Namespaces</h5>
                <a href="https://laravel.com/docs/6.x/routing#route-group-namespaces" target="_blank">Documentation</a>

                <hr>
                <h5>Subdomain Routing</h5>
                <a href="https://laravel.com/docs/6.x/routing#route-group-subdomain-routing" target="_blank">Documentation</a>

                <hr>
                <h5>Route Prefixes</h5>
                <a href="https://laravel.com/docs/6.x/routing#route-group-prefixes" target="_blank">Documentation</a>

                <hr>
                <h5>Route Name Prefixes</h5>
                <a href="https://laravel.com/docs/6.x/routing#route-group-name-prefixes" target="_blank">Documentation</a>

            </div>

            <div class="tab-pane fade" id="Route-Model-Binding">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Route Model Binding</h4>
                <h5>Implicit Binding</h5>
                <h5>Explicit Binding</h5>

                <a href="https://laravel.com/docs/6.x/routing#route-model-binding" target="_blank">Documentation</a>


            </div>
            <div class="tab-pane fade" id="Fallback-Routes">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Fallback Routes</h4>
                <a href="https://laravel.com/docs/6.x/routing#fallback-routes" target="_blank">Documentation</a>

    
</pre>
                <hr>
            </div>
            <div class="tab-pane fade" id="Rate-Limiting">
            <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Rate Limiting</h4>
            <a href="https://laravel.com/docs/6.x/routing#rate-limiting" target="_blank">Documentation</a>

            </div>

            <div class="tab-pane fade" id="FormMethodSpoofing">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Form Method Spoofing</h4>
               
                <p>HTML forms do not support <code>PUT, PATCH or DELETE</code> actions.</p>
                <pre>
form action="/foo/bar" method="POST">
    input type="hidden" name="_method" value="PUT">
    input type="hidden" name="_token" value="{{ csrf_token() }}">
/form>


form action="/foo/bar" method="POST">
    @@method('PUT')
    @@csrf
/form>
                </pre>

            </div>

            <div class="tab-pane fade" id="AccessingTheCurrentRoute">
            <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Accessing The Current Route</h4>
            <pre>
$route = Route::current();

$name = Route::currentRouteName();

$action = Route::currentRouteAction();
            </pre>

            </div>

        </div>
    </div>
</div>



@endsection


