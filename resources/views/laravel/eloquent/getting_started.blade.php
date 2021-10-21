@extends('inc.layout')

@section('content')

<h2 class="my-4 text-info text-center">Eloquent: Getting Started</h2>

@include('laravel.eloquent._sidebar')


    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">

            {{-- Introduction --}}
            @include('laravel.eloquent._introduction')

            {{-- Defining Models --}}
            @include('laravel.eloquent._DefiningModels')
            

            {{-- Retrieving Models --}}
            @include('laravel.eloquent._RetrievingModels')

            {{-- Retrieving Single Models / Aggregates --}}
            @include('laravel.eloquent._RetrievingSingleModels_Aggregates')

            {{-- Inserting & Updating Models --}}
            @include('laravel.eloquent._InsertingUpdatingModels')

            

           

           

           

           
           

        </div>
    </div>
</div>

@endsection