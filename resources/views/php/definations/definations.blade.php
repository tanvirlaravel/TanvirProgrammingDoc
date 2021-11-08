@extends('inc.layout')

@section('content')


<h4 class="my-4 text-info text-center ">PHP Defination</h4>
<div class="row">
  
    <div class="col">
  
     @include('php.definations._menu')

    <div class="tab-content" id="pills-tabContent">
      
     
      @include('php.definations._a')
      @include('php.definations._u')
      @include('php.definations._x')

   
    </div>





    </div>
  
</div>



@endsection