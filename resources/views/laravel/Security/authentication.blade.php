@extends('inc.layout')

@section('content')

<h2 class="my-4 text-info text-center">Authentication</h2>

<div class="row">
    <div class="col-3">
    <div class="nav flex-column nav-pills card" id="v-pills-tab" role="tablist" aria-orientation="vertical">

<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home">Introduction </a>

<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile">Authentication Quickstart</a>

<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages">Manually Authenticating Users <span class="badge badge-warning">W</span></a>

<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings">HTTP Basic Authentication<span class="badge badge-warning">W</span></a>

<a class="nav-link" data-toggle="pill" href="#Fallback-Routes">Logging Out</a>

<a class="nav-link" data-toggle="pill" href="#Rate-Limiting">Social Authentication<span class="badge badge-warning">W</span></a>
<a class="nav-link" data-toggle="pill" href="#AddingCustomGuards">Adding Custom Guards<span class="badge badge-warning">W</span></a>
<a class="nav-link" data-toggle="pill" href="#AddingCustomUserProviders">Adding Custom User Providers<span class="badge badge-warning">W</span></a>
<a class="nav-link" data-toggle="pill" href="#Events">Events</span></a>


</div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Introduction</h2>
                <ol>
                    <li><a href="DatabaseConsiderations">Database Considerations</a></li>
                </ol>
                <hr>
                <p>
                    The authentication configuration file is located at <code>config/auth.php</code>, which contains several well documented options for tweaking the behavior of the authentication services.
                </p>
                <p>At its core, Laravel's authentication facilities are made up of</p>
                <ul>
                    <li>guards</li>
                    <li>providers</li>
                </ul>
                <p><strong>Guards :</strong>Guards define how users are authenticated for each request. Laravel ships with a <code>session guard</code> which <code>maintains state</code> using session storage and cookies.</p>

                <p><strong>Providers :</strong>Providers define how users are retrieved from your persistent storage. Laravel ships with support for retrieving users using <code>Eloquent</code> and the <code>database query builder</code>.</p>

                <hr>
                <h3 id="DatabaseConsiderations">Database Considerations</h3>
                <hr>
                <p>By default, Laravel includes an <code>App\User</code> Eloquent model in your <code>app</code> directory. </p>

                <h5><a href="" _target="_blank">drivers</a></h5>
                <ul>
                    <li>SMTP</li>
                    <li>Mailgun</li>
                    <li>Postmark</li>
                    <li>SparkPost</li>
                    <li>Amazon SES</li>
                    <li>sendmail</li>
                </ul>

                <hr>
                <h3>Driver Prerequisites</h3>
                <hr>
                <p>All of the API drivers require the Guzzle HTTP library</p>
                <code>composer require guzzlehttp/guzzle</code>

                <h5>Mailgun Driver</h5>
                <h5>Postmark Driver</h5>
                <h5>SES Driver</h5>

                <br>            <br>
                <a href="https://laravel.com/docs/6.x/mail#driver-prerequisites" target="_blank">Documentation</a>
                <br><br><br>

            </div>

            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Authentication Quickstart</h2>

               <ol>
                   <li><a href="#Routing">Routing</a></li>
                   <li><a href="#Views">Views</a></li>
                   <li><a href="#Authenticating">Authenticating</a></li>
                   <li><a href="#RetrievingTheAuthenticatedUser">Retrieving The Authenticated User</a></li>
                   <li><a href="#ProtectingRoutes">Protecting Routes</a></li>
                   <li><a href="#PasswordConfirmation">Password Confirmation</a></li>
                   <li><a href="#LoginThrottling">Login Throttling</a></li>
               </ol>
               <hr>
               <p>Laravel ships with several pre-built authentication controllers, which are located in the <code>App\Http\Controllers\Auth</code> namespace.  Each of these controllers uses a trait to include their necessary methods.</p>

               <hr>
               <h3 id="Routing">Routing</h3>
               <hr>
               <p><code>composer require laravel/ui "^1.0" --dev</code></p>
               <p><code>php artisan ui vue --auth</code></p>


               <hr>
               <h3 id="Views">Views</h3>
               <hr>
               <p><code>php artisan ui vue --auth</code> command will create all of the views you need for authentication and place them in the <code>resources/views/auth</code> directory.</p>
               <p>The <code>ui</code> command will also create a <code>resources/views/layouts</code> directory containing a base layout for your application. </p>

               <hr>
               <h3 id="Authenticating">Authenticating</h3>
               <hr>
               <h5>Path Customization</h5>
               <p><code>RouteServiceProvider:</code></p>
               <p><code>public const HOME = '/home';</code></p>
               <pre class="bg-dark text-warning">

                protected function authenticated(Request $request, $user)
                {
                    return response([
                        //
                    ]);
                }
               </pre>

               <h5>Username Customization</h5>
               <p><code>username</code> method on your <code>LoginController</code>:</p>
               <pre class="bg-dark text-warning">

                public function username()
                {
                    return 'username';
                }
               </pre>
               <h5>Guard Customization</h5>               
               <p><a href="https://laravel.com/docs/6.x/authentication#included-authenticating" target="_blank">Documentation</a></p>

               <h5>Validation / Storage Customization</h5>
               <p><a href="https://laravel.com/docs/6.x/authentication#included-authenticating" target="_blank">Documentation</a></p>

               <hr>
               <h3 id="RetrievingTheAuthenticatedUser">Retrieving The Authenticated User</h3>
               <hr>
               <p>You may access the authenticated user via the <code>Auth</code> facade:</p>

               <pre class="bg-dark text-warning p-2">
                // Get the currently authenticated user...
                $user = Auth::user();

                // Get the currently authenticated user's ID...
                $id = Auth::id();
               </pre>

               <p>once a user is authenticated</p>
               <p><code>$request->user()  </code>// returns an instance of the authenticated user...</p>

               <h5>Determining If The Current User Is Authenticated</h5>

               <pre class="bg-dark text-warning p-2">
                use Illuminate\Support\Facades\Auth;

                if (Auth::check()) {
                    // The user is logged in...
                }
               </pre>
               <p>Even though it is possible to determine if a user is authenticated using the check method, you will typically use a middleware to verify that the user is authenticated before allowing the user access to certain routes / controllers. </p>

               <hr>
               <h3 id="ProtectingRoutes">Protecting Routes</h3>
               <hr>
               <pre class="bg-dark text-warning p-2">
                Route::get('profile', function () {
                    // Only authenticated users may enter...
                })->middleware('auth');

                public function __construct()
                {
                    $this->middleware('auth');
                }
               </pre>

               <h5>Redirecting Unauthenticated Users</h5>
               <pre class="bg-dark text-warning p-2">

                app/Http/Middleware/Authenticate.php

                protected function redirectTo($request)
                {
                    return route('login');
                }
               </pre>

               <h5>Specifying A Guard</h5>
               <p><a href="https://laravel.com/docs/6.x/authentication#protecting-routes" target="_blank">Documentaion</a></p>

               <hr>
               <h3 id="PasswordConfirmation">Password Confirmation</h3>
               <hr>
               <p><a href="https://laravel.com/docs/6.x/authentication#password-confirmation" target="_blank">Documentaion</a></p>


               <hr>
               <h3 id="LoginThrottling">Login Throttling</h3>
               <hr>
               <p><a href="https://laravel.com/docs/6.x/authentication#login-throttling" target="_blank">Documentaion</a></p>
             
          </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <h2 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Manually Authenticating Users</h2>
              

            </div>

            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">HTTP Basic Authentication</h2>
               
               
            </div>

            <div class="tab-pane fade" id="Fallback-Routes">
                 <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">block">Logging Out</h2>
                


            </div>
            <div class="tab-pane fade" id="Rate-Limiting">
                 <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Social Authentication</h2>
              

            </div>

            <div class="tab-pane fade" id="AddingCustomGuards">
                 <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Adding Custom Guards</h2>
              

            </div>

            <div class="tab-pane fade" id="AddingCustomUserProviders">
                 <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Adding Custom User Providers</h2>
              

            </div>
            
            

            <div class="tab-pane fade" id="Events">
                 <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Events</h2>
                 <p>Laravel raises a variety of <code>events</code> during the authentication process. You may attach listeners to these events in your <code>EventServiceProvider</code>:</p>
                 <pre class="bg-dark text-warning p-2">
                protected $listen = [
                    'Illuminate\Auth\Events\Registered' => [
                        'App\Listeners\LogRegisteredUser',
                    ],

                    'Illuminate\Auth\Events\Attempting' => [
                        'App\Listeners\LogAuthenticationAttempt',
                    ],

                    'Illuminate\Auth\Events\Authenticated' => [
                        'App\Listeners\LogAuthenticated',
                    ],

                    'Illuminate\Auth\Events\Login' => [
                        'App\Listeners\LogSuccessfulLogin',
                    ],

                    'Illuminate\Auth\Events\Failed' => [
                        'App\Listeners\LogFailedLogin',
                    ],

                    'Illuminate\Auth\Events\Logout' => [
                        'App\Listeners\LogSuccessfulLogout',
                    ],

                    'Illuminate\Auth\Events\Lockout' => [
                        'App\Listeners\LogLockout',
                    ],

                    'Illuminate\Auth\Events\PasswordReset' => [
                        'App\Listeners\LogPasswordReset',
                    ],
                ];
                 </pre>
              

            </div>
            

        </div>
    </div>
</div>

@endsection