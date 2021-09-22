@extends('inc.layout')

@section('content')

<h2 class="my-4 text-info text-center">Database: Getting Started</h2>

<div class="row">
    <div class="col-3">
    <div class="nav flex-column nav-pills card" id="v-pills-tab" role="tablist" aria-orientation="vertical">

<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home">Introduction</a>

<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile">Running Raw SQL Queries<span class="badge badge-warning">W</span></a>

<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages">Listening For Query Events <span class="badge badge-warning">W</span></a>

<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings">Database Transactions <span class="badge badge-warning">W</span></a>



</div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Introduction</h2>
                <ol>
                    <li><a href="#Configuration">Configuration</a></li>
                    <li><a href="#ReadWriteConnections">Read & Write Connections</a></li>
                    <li><a href="#UsingMultipleDatabaseConnections">Using Multiple Database Connections</a></li>
                </ol>
                <p><a href="https://laravel.com/docs/6.x/database#introduction" target="_blank">Documentation</a></p>

            </div>

            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Running Raw SQL Queries</h2>
                
                <p>Once you have configured your database connection, you may run queries using the <code>DB</code> facade. The <code>DB</code> facade provides methods for each type of query: <code>select, update, insert, delete,</code> and <code>statement</code>.</p>
                

            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Listening For Query Events</h2>
               
            </div>

            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Database Transactions</h2>
               
                <a href="https://laravel.com/docs/6.x/controllers#restful-supplementing-resource-controllers" target="_blank">Document</a>
               
            </div>

           
           

        </div>
    </div>
</div>

@endsection