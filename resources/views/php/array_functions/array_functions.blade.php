@extends('inc.layout')

@section('content')

<h2 class="my-4 text-info text-center">Array Functions</h2>

<div class="row">
    <div class="col-3">
        @include('php.array_functions._menu_array')
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">

          @include('php.array_functions._change_key')
          @include('php.array_functions._column')
          @include('php.array_functions._combine')
          @include('php.array_functions._count_values')
          @include('php.array_functions._array_diff')
          @include('php.array_functions._array_diff_assoc')
          @include('php.array_functions._array_diff_key')

          @include('php.array_functions._array_merge')

           
           

            <div class="tab-pane fade" id="Fallback-Routes">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Adding Custom Session Drivers</h4>
                <hr>
               
 <a href="https://laravel.com/docs/6.x/session#adding-custom-session-drivers" target="_blank">Documentation</a>

            </div>
           

        </div>
    </div>
</div>

@endsection