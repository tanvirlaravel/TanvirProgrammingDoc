@extends('inc.layout')

@section('content')

<h2 class="my-4 text-info text-center">Session</h2>

<div class="row">
    <div class="col-3">
        <div class="nav flex-column nav-pills card" id="v-pills-tab" role="tablist" aria-orientation="vertical">

           
            
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home">Change Key Case </a> 
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings">Column</a> 
        
            
        
            <a class="nav-link" data-toggle="pill" href="#Fallback-Routes">Combine</span></a>
        
        
        </div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">

          @include('php.array_functions._change_key')
          @include('php.array_functions._column')

           
           

            <div class="tab-pane fade" id="Fallback-Routes">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Adding Custom Session Drivers</h4>
                <hr>
               
 <a href="https://laravel.com/docs/6.x/session#adding-custom-session-drivers" target="_blank">Documentation</a>

            </div>
           

        </div>
    </div>
</div>

@endsection