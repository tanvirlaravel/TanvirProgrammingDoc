@extends('inc.layout')

@section('content')


<h1 class="my-4 text-info text-center">Chapter 5. Database & Eloquent</h1>

<div class="row">
    <div class="col-4">
        <ul class="list-group position-fixed" id="sidebar_menu">         
        </ul>
    </div>

    <div class="col-8">

        <h2 class="text-success">Introduction</h2>
        <p>In Eloquent, one class per table, which is responsible for retrieving, representing, and per-sisting data in that table</p>
        <p>You can customize your response whit accessors, mutators and attribute casting.</p>
        <hr>

        <h2 class="text-success">Configuration</h2>
        <p><strong>Driver:</strong> MySQL, Postgres</p>
        <p>With any service in laravel that allows connections from multiple sources-- sessions can be backed by the database or file storage, the cache can use Redis or Memcached, database can use MySQL or PostgreSQL -- you can define multiple connections and also choose that a particular connection will be the "default", meaning it will be used any time you don't explicitly ask for a particular connection. Here's how you ask for a specific connection, if you want to :</p>
        <p><code>$user = DB::connection('secondary')->select('select * from users')</code></p>

        <h2 class="text-success">Migration</h2>
        <p>A migration is a single <strong><code>file</code></strong> that defines two things: the modifications desired when running this migration up and optionally, the modifications desired when running this migration down</p>
        <p>Migration are always run in order by date. Every migration file is named something like this: 2018_10_12_00000_create_users_table.php</p>

        
 

        

       
        






    
    <p class="my-5">.</p>
    </div>
</div>


@endsection