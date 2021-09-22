@extends('inc.layout')

@section('content')

<h2 class="my-4 text-info text-center">Session</h2>

<div class="row">
    <div class="col-3">
        <div class="nav flex-column nav-pills card" id="v-pills-tab" role="tablist" aria-orientation="vertical">

            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home">Introduction </a>  
        
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings">Using The Session </a>
        
            <a class="nav-link" data-toggle="pill" href="#Fallback-Routes">Adding Custom Session Drivers <span class="badge badge-warning">W</span></a>
        
        
        </div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Introduction</h2>
                 <ol>
                    <li><a href="#Configuration">Configuration</a></li>
                    <li><a href="#DriverPrerequisites">Driver Prerequisites</a></li>
                </ol>
                <hr>
                <p>Since HTTP driven applications are stateless, sessions provide a way to store information about the user across multiple requests. </p>

                <hr>
                <h3 id="Configuration" class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Configuration</h3>
                <a href="https://laravel.com/docs/6.x/session#configuration" target="_blank">Documentation</a>

                <hr>
                <h3 id="DriverPrerequisites" class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Driver Prerequisites</h3>
                
                 <a href="https://laravel.com/docs/6.x/session#driver-prerequisites" target="_blank">Documentation</a>
            </div>

           
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Using The Session</h2>
              
                <ol>
                    <li><a href="#RetrievingData">Retrieving Data</a></li>
                    <li><a href="#StoringData">Storing Data</a></li>
                    <li><a href="#FlashData">Flash Data</a></li>
                    <li><a href="#DeletingData">Deleting Data</a></li>
                    <li><a href="#RegeneratingTheSessionID">Regenerating The Session ID</a></li>
                </ol>
               
                <hr>
                <h3 id="RetrievingData">Retrieving Data</h3>
                <hr>
                <p>There are two primary ways of working with session data in Laravel: the global <code>session</code> helper and via a <code>Request</code> instance.</p>
                <p><code>$value = $request->session()->get('key');</code></p>
                <p>When you retrieve an item from the session, you may also pass a default value as the second argument to the <code>get</code> method. This default value will be returned if the specified key does not exist in the session. If you pass a <code>Closure</code> as the default value to the <code>get</code> method and the requested key does not exist, the <code>Closure</code> will be executed and its result returned:</p>
                <pre>
                    $value = $request->session()->get('key', 'default');

                    $value = $request->session()->get('key', function () {
                        return 'default';
                    });
                </pre>

                <h5 class="pt-3">The Global Session Helper</h5>
                <p>global <code>session</code> PHP function</p>
                <pre>
                    Route::get('home', function () {
                        // Retrieve a piece of data from the session...
                        $value = session('key');
                    
                        // Specifying a default value...
                        $value = session('key', 'default');
                    
                        // Store a piece of data in the session...
                        session(['key' => 'value']);
                    });
                </pre>

                <h5 class="pt-3">Retrieving All Session Data</h5>
                <p><code>$data = $request->session()->all();</code></p>

                <h5 class="pt-3">Determining If An Item Exists In The Session</h5>
                <p><code>has</code> method returns <code>true</code> if the item is present and is not <code>null</code>:</p>
                <pre>
                    if ($request->session()->has('users')) {
                        //
                    }
                </pre>
                <p>To determine if an item is present in the session, even if its value is <code>null</code>, you may use the <code>exists</code> method. The exists method returns <code>true</code> if the item is present:</p>
                <pre>
                    if ($request->session()->exists('users')) {
                        //
                    }
                </pre>

                 <hr>
                <h3 id="StoringData">Storing Data</h3>
                <hr>
                <pre>
                    // Via a request instance...
                    $request->session()->put('key', 'value');

                    // Via the global helper...
                    session(['key' => 'value']);
                </pre>
                
                <h5 class="pt-3">Pushing To Array Session Values</h5>
                <p>The <code>push</code> method may be used to push a new value onto a session value that is an array. For example, if the <code>user.teams</code> key contains an array of team names, you may push a new value onto the array like so:</p>
                <p><code>$request->session()->push('user.teams', 'developers');</code></p>

                <h5 class="pt-3">Retrieving & Deleting An Item</h5>
                <p>The <code>pull</code> method will retrieve and delete an item from the session in a single statement:</p>
                <p><code>$value = $request->session()->pull('key', 'default');</code></p>
                

                 <hr>
                <h3 id="FlashData">Flash Data</h3>
                <hr>
                <p>Sometimes you may wish to store items in the session only for the next request. You may do so using the <code>flash</code> method. Data stored in the session using this method will be available immediately and during the subsequent HTTP request. After the subsequent HTTP request, the flashed data will be deleted.</p>
                <p><code>$request->session()->flash('status', 'Task was successful!');</code></p>
                <p>If you need to keep your flash data around for several requests, you may use the <code>reflash</code> method, which will keep all of the flash data for an additional request. If you only need to <code>keep</code> specific flash data, you may use the keep method:</p>
                <pre>
                    $request->session()->reflash();

                    $request->session()->keep(['username', 'email']);
                </pre>

                 <hr>
                <h3 id="DeletingData">Deleting Data</h3>
                <hr>
                <p>The <code>forget</code> method will remove a piece of data from the session. If you would like to remove all data from the session, you may use the <code>flush</code> method:</p>
                <pre>
                    // Forget a single key...
                    $request->session()->forget('key');

                    // Forget multiple keys...
                    $request->session()->forget(['key1', 'key2']);

                    $request->session()->flush();
                </pre>

                 <hr>
                <h3 id="RegeneratingTheSessionID">Regenerating The Session ID</h3>
                <hr>
                <p>Regenerating the session ID is often done in order to prevent malicious users from exploiting a <code><a href="https://en.wikipedia.org/wiki/Session_fixation" target="_blank">session fixation</a></code> attack on your application.</p>
                <p>Laravel automatically regenerates the session ID during authentication if you are using the built-in <code>LoginController</code>; however, if you need to manually regenerate the session ID, you may use the <code>regenerate</code> method.</p>
                <p><code>$request->session()->regenerate();</code></p>
            </div>

            <div class="tab-pane fade" id="Fallback-Routes">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Adding Custom Session Drivers</h4>
                <hr>
               
 <a href="https://laravel.com/docs/6.x/session#adding-custom-session-drivers" target="_blank">Documentation</a>

            </div>
           

        </div>
    </div>
</div>

@endsection