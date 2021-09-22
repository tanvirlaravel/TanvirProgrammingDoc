@extends('inc.layout')

@section('content')

<h2 class="my-4 text-info text-center">Views</h2>

<div class="row">
    <div class="col-3">
        <div class="nav flex-column nav-pills card" id="v-pills-tab" role="tablist" aria-orientation="vertical">

            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home">Creating Views </a>  
        
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings">Passing Data To Views</a>
        
            <a class="nav-link" data-toggle="pill" href="#Fallback-Routes">View Composers <span class="badge badge-warning">W</span></a>
        
        
        </div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Creating Views</h2>
                
                <h5 class="pt-3">Determining If A View Exists</h5>
                <pre>
                    use Illuminate\Support\Facades\View;

                    if (View::exists('emails.customer')) {
                        //
                    }
                </pre>
                <h5 class="pt-3">Creating The First Available View</h5>
                <p>Using the <code>first</code> method, you may create the first view that exists in a given array of views. This is useful if your application or package allows views to be customized or overwritten:</p>
                <p><code>return view()->first(['custom.admin', 'admin'], $data);</code></p>
                <p>You may also call this method via the <code>View facade</code>: </p>
                <p>
                    <code>
                        use Illuminate\Support\Facades\View;<br>
                        return View::first(['custom.admin', 'admin'], $data);
                    </code>
                </p>

            </div>

           
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Passing Data To Views</h2>
              
                <ol>
                    <li><a href="#SharingDataWithAllViews">Sharing Data With All Views</a></li>
                  
                </ol>

                <p><code>return view('greetings', ['name' => 'Victoria']);</code></p>
                <p><code>return view('greeting')->with('name', 'Victoria');</code></p>
               
                <hr>
                <h3 id="SharingDataWithAllViews">Sharing Data With All Views</h3>
                <hr>
                <pre>       

                use Illuminate\Support\Facades\View;

                class AppServiceProvider extends ServiceProvider
                {
                   
                    public function boot()
                    {
                        View::share('key', 'value');
                    }
                }
               
                </pre>
                
            </div>

            <div class="tab-pane fade" id="Fallback-Routes">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">View Composers</h4>
                <hr>
               
 <a href="https://laravel.com/docs/6.x/views#view-composers" target="_blank">Documentation</a>

            </div>
           

        </div>
    </div>
</div>

@endsection