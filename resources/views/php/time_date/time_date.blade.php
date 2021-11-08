@extends('inc.layout')

@section('content')

<h2 class="my-4 text-info text-center">Time & Date</h2>

<div class="row">
    <div class="col-3">
        <div class="nav flex-column nav-pills card" id="v-pills-tab" role="tablist" aria-orientation="vertical">           
            
            <a class="nav-link active" id="v-pills-W3Schools-tab" data-toggle="pill" href="#W3Schools">W3Schools</a> 
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings">Column</a> 
        
            
        
            <a class="nav-link" data-toggle="pill" href="#Fallback-Routes">Combine</span></a>
        
        
        </div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">

          @include('php.time_date._w3schools')

           
           

            
           

        </div>
    </div>
</div>

@endsection