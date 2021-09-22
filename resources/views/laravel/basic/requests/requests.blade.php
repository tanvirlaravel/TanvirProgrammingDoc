@extends('inc.layout')

@section('content')

<h1 class="my-4 text-warning text-center">Requests</h1>

<div class="row">
    <div class="col-3">
    <div class="nav flex-column nav-pills card" id="v-pills-tab" role="tablist" aria-orientation="vertical">


<a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile">Accessing The Request </a>

<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages">Input Trimming & Normalization </a>

<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings">Retrieving Input </a>

<a class="nav-link" data-toggle="pill" href="#Fallback-Routes">Files </a>

<a class="nav-link" data-toggle="pill" href="#Rate-Limiting">Configuring Trusted Proxies <span class="badge badge-warning">W</span></a>


</div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
           

            <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Accessing The Request</h2>
               
                <ol>
                    <li><a href="#RequestPathMethod">Request Path & Method</a></li>
                    <li><a href="#psr-7">PSR-7 Requests</a></li>
                </ol>
                <hr>

                <p>To obtain an instance of the current HTTP request via dependency injection, you should type-hint the <code>Illuminate\Http\Request</code> class on your controller method. The incoming request instance will automatically be injected by the <code>service container</code>:</p>
                <pre>
                    public function store(Request $request)  {
                        $name = $request->input('name');
                    }
                </pre>

               
                <h5>Dependency Injection & Route Parameters</h5>
                <code>Route::put('user/{id}', 'UserController@update');</code><br>
                <code>public function update(Request $request, $id)</code>
               

                <h5>Accessing The Request Via Route Closures</h5>
                <code>Route::get('/', function (Request $request) {</code>


                <hr>
                <h3 class="text-info" id="RequestPathMethod">Request Path & Method</h3>
                <hr>
                <p>The Illuminate\Http\Request instance provides a variety of methods</p>
                <h5>Retrieving The Request Path</h5>
                <p><code>http://domain.com/foo/bar</code></p>
                <p><code>$uri = $request->path();</code>           // foo/bar:</p>
                <code>if ($request->is('admin/*')) {</code>
                
                    <h5 class="mt-3">Retrieving The Request URL</h5>
<p> The url method will return the URL without the query string, while the fullUrl method includes the query string:</p>
                    <pre>
// Without Query String...
$url = $request->url();

// With Query String...
$url = $request->fullUrl();
                    </pre>

                    <h5>Retrieving The Request Method</h5>
                    <p>The <code>method</code> method will return the <code>HTTP verb</code> for the request.</p>
                    <pre>
$method = $request->method();

if ($request->isMethod('post')) {
    //
}
                    </pre>
                

                    <hr>
                    <h3 class="text-info" id="psr-7">PSR-7 Requests</h3>
                    <hr>
              
                <a href="https://laravel.com/docs/6.x/requests#psr7-requests" target="_blank">Documentaion</a>
             

            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <h2 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Input Trimming & Normalization</h2>
               <p>By default, Laravel includes the TrimStrings and ConvertEmptyStringsToNull middleware in your application's global middleware stack. These middleware will automatically trim all incoming string fields on the request, as well as convert any empty string fields to null. </p>

               <p>If you would like to disable this behavior, you may remove the two middleware from your application's middleware stack by removing them from the $middleware property of your App\Http\Kernel class.</p>
            </div>

            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Retrieving Input</h2>
                
                <ol>
                    <li><a href="#OldInput">Old Input</a></li>
                    <li><a href="#Cookies">Cookies</a></li>
                </ol>
                <hr>

                <p>retrieve all of the input data as an array using the all method:</p>
                <code>$input = $request->all();</code>

                <h5 class="pt-3">Retrieving An Input Value</h5>
                <p>Regardless of the HTTP verb, the input method may be used to retrieve user input:</p>
                <code>$name = $request->input('name');</code>

                <h5 class="pt-3">Default value</h5>
                <code>$name = $request->input('name', 'Sally');</code>
                <p>When working with forms that contain array inputs, use "dot" notation to access the arrays:</p>
                <code>$name = $request->input('products.0.name');</code>

                <h5 class="pt-3">Retrieving Input From The Query String</h5>
                <p>the <code>query</code> method will only retrieve values from the query string:</p>
                <code>$name = $request->query('name');</code><br>
                <p>If the requested query string value data is not present, the second argument to this method will be returned:</p>
                <code>$name = $request->query('name', 'Helen');</code>
                <p>You may call the <code>query</code> method without any arguments in order to retrieve all of the query string values as an associative array:</p>
                <code>$query = $request->query();</code>

                <h5 class="pt-3">Retrieving Input Via Dynamic Properties</h5>
                <p> if one of your application's forms contains a <code>name</code> field, you may access the value of the field like so:</p>
                <code>$name = $request->name;</code>
                <p>When using dynamic properties, Laravel will first look for the parameter's value in the request payload. If it is not present, Laravel will search for the field in the route parameters.</p>

                <h5 class="pt-3">Retrieving JSON Input Values</h5>
                <p>When sending JSON requests to your application, you may access the JSON data via the <code>input</code> method as long as the <code>Content-Type</code> header of the request is properly set to <code>application/json</code>. You may even use "dot" syntax to dig into JSON arrays:</p>
                <code>$name = $request->input('user.name');</code>

                <h5 class="pt-3">Retrieving Boolean Input Values</h5>
                <p>When dealing with HTML elements like checkboxes, your application may receive "truthy" values that are actually strings. For example, "true" or "on". For convenience, you may use the <code>boolean</code> method to retrieve these values as booleans. The <code>boolean</code> method returns <code>true</code> for 1, "1", true, "true", "on", and "yes". All other values will return <code>false</code>:</p>
                <code>$archived = $request->boolean('archived');</code>

                <h5 class="pt-3">Retrieving A Portion Of The Input Data</h5>
                <code>
                    $input = $request->only(['username', 'password']);<br>

$input = $request->only('username', 'password');<br>

$input = $request->except(['credit_card']);<br>

$input = $request->except('credit_card');
                </code>

                <h5 class="pt-3">Determining If An Input Value Is Present</h5>
                <code>
                    if ($request->has('name')) {  //  }
                </code>
                <p>When given an array, the <code>has</code> method will determine if all of the specified values are present:</p>
                <code>
                    if ($request->has(['name', 'email'])) {
                        //
                    }
                </code>

                <p>The <code>hasAny</code> method returns <code>true</code> if any of the specified values are present:</p>
                <code>
                    if ($request->hasAny(['name', 'email'])) {
                        //
                    }
                </code>

                <p>If you would like to determine if a value is present on the request and is not empty, you may use the <code>filled</code> method:</p>
                <code>
                    if ($request->filled('name')) {
                        //
                    }
                </code>

                <p>To determine if a given key is absent from the request, you may use the <code>missing</code> method:</p>
                <code>
                    if ($request->missing('name')) {
                        //
                    }
                </code>

                <hr>
                <h4 id="OldInput">Old Input</h4>
                <hr>
                <p>Laravel allows you to keep input from one request during the next request. This feature is particularly useful for re-populating forms after detecting validation errors. </p>
                <h5>Flashing Input To The Session</h5>
                <p>The <code>flash</code> method on the <code>Illuminate\Http\Request</code> class will flash the current input to the <code>session</code> so that it is available during the user's next request to the application:</p>
                <p><code>$request->flash();</code></p>
                <p><code>$request->flashOnly(['username', 'email']);</code></p>
                <p><code>$request->flashExcept('password');</code></p>

                <h5 class="pt-3">Flashing Input Then Redirecting</h5>
                <pre>
                    return redirect('form')->withInput();

                    return redirect('form')->withInput(
                        $request->except('password')
                    );
                </pre>

                <h5 class="pt-3">Retrieving Old Input</h5>
                <p><code>$username = $request->old('username');</code></p>
                <p>Laravel also provides a global <code>old</code> helper. If no old input exists for the given field, <code>null</code> will be returned:</p>
               <p><code>&#60;input type="text" name="username" value="{{ old('username') }}"></code></p>

                <hr>
                <h4 id="Cookies">Cookies</h4>
                <hr>
                <h5 class="pb-3">Retrieving Cookies From Requests</h5>
                <p>All cookies created by the Laravel framework are encrypted and signed with an authentication code, meaning they will be considered invalid if they have been changed by the client. To retrieve a cookie value from the request, use the <code>cookie</code> method on a <code>Illuminate\Http\Request</code> instance:</p>
                <p><code>$value = $request->cookie('name');</code></p>
                <p>Alternatively, you may use the Cookie facade to access cookie values:</p>
                <pre>
                    use Illuminate\Support\Facades\Cookie;

                    $value = Cookie::get('name');
                </pre>

                <h5 class="pt-3">Attaching Cookies To Responses</h5>
                <pre>
                    return response('Hello World')->cookie(
                        'name', 'value', $minutes
                    );
                </pre>

                <p>Alternatively, you can use the <code>Cookie</code> facade to "queue" cookies for attachment to the outgoing response from your application. The <code>queue</code> method accepts a <code>Cookie</code> instance or the arguments needed to create a <code>Cookie</code> instance. These cookies will be attached to the outgoing response before it is sent to the browser:</p>
                <pre>
                    Cookie::queue(Cookie::make('name', 'value', $minutes));

                    Cookie::queue('name', 'value', $minutes);
                </pre>
                <h5 class="pt-3">Generating Cookie Instances</h5>
                <p>If you would like to generate a <code>Symfony\Component\HttpFoundation\Cookie</code> instance that can be given to a response instance at a later time, you may use the global <code>cookie</code> helper. This cookie will not be sent back to the client unless it is attached to a response instance:</p>
                <pre>
                    $cookie = cookie('name', 'value', $minutes);

                    return response('Hello World')->cookie($cookie);
                </pre>


                
            </div>

            <div class="tab-pane fade" id="Fallback-Routes">
                <h2 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Files</h2>
               <ol>
                   <li><a href="#RetrievingUploadedFiles">Retrieving Uploaded Files</a></li>
                   <li><a href="#StoringUploadedFiles">Storing Uploaded Files</a></li>
               </ol>

               <hr>
               <h3 id="RetrievingUploadedFiles">Retrieving Uploaded Files</h3>
               <hr>
               <p>You may access uploaded files from a <code>Illuminate\Http\Request</code> instance using the <code>file</code> method or using dynamic properties. The <code>file</code> method returns an instance of the <code>Illuminate\Http\UploadedFile</code> class, which extends the PHP <code>SplFileInfo</code> class and provides a variety of methods for interacting with the file:</p>
               <pre>
                $file = $request->file('photo');

                $file = $request->photo;

                if ($request->hasFile('photo')) {
                    //
                }
               </pre>
               <p>In addition to checking if the file is present, you may verify that there were no problems uploading the file via the <code>isValid</code> method:</p>
               <pre>
                if ($request->file('photo')->isValid()) {
                    //
                }
               </pre>
               <h5 class="pt-3">File Paths & Extensions</h5>
               <pre>
                $path = $request->photo->path();

                $extension = $request->photo->extension();
               </pre>
               <h5 class="pt-3">Other File Methods</h5>
               <a href="https://github.com/symfony/symfony/blob/3.0/src/Symfony/Component/HttpFoundation/File/UploadedFile.php" target="_blank"> API documentation for the class </a>

               <hr>
               <h3 id="StoringUploadedFiles">Storing Uploaded Files</h3>
               <hr>
               <p>The <code>store</code> method accepts the path where the file should be stored relative to the filesystem's configured root directory. This path should not contain a file name, since a unique ID will automatically be generated to serve as the file name.</p>
               <p>The <code>store</code> method also accepts an optional second argument for the name of the disk that should be used to store the file. The method will return the path of the file relative to the disk's root:</p>
               <pre>
                $path = $request->photo->store('images');

                $path = $request->photo->store('images', 's3');
               </pre>

               <p>If you do not want a file name to be automatically generated, you may use the <code>storeAs</code> method, which accepts the path, file name, and disk name as its arguments:</p>
               <pre>
                $path = $request->photo->storeAs('images', 'filename.jpg');

                $path = $request->photo->storeAs('images', 'filename.jpg', 's3');
               </pre>


            </div>
            <div class="tab-pane fade" id="Rate-Limiting">
                <h2 class="mt-5 mb-4 py-2 pl-5 pr-2  d-inline-block">Sorting Middleware</h2>

            </div>
            <div class="tab-pane fade" id="Form-Method-Spoofing">
                <h2 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Middleware Parameters</h2>
                


            </div>
            <div class="tab-pane fade" id="Accessing-The-Current-Route">
                <h2 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Terminable Middleware</h2>
               

            </div>

        </div>
    </div>
</div>

@endsection