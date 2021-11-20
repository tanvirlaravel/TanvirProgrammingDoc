@extends('inc.layout')

@section('content')

<div class="row">
    <div class="col">
    <h1 class="mb-4 mt-1 text-primary heding-one">P</h1>
    <hr id="top-heading">
    </div>
</div>

<div class="row">

    <div class="col-3">
            <ul class="list-group position-fixed" id="sidebar_menu">         
            </ul>
        </div>

            <div class="col-md-9">
                <h2>Proxies</h2>
                <p>Between the Web browser and the server, numerous computers and machines relay the HTTP messages</p>
                <p>most of these operate at the transport, network or physical levels, Those operating at the application layers are generally called proxies</p>
                <p>Proxies may perform numerous functions:</p>
                <ul>
                    <li>caching (the cache can be public or private, like the browser cache)</li>
                    <li>filtering (like an antivirus scan or parental controls)</li>
                    <li>load balancing (to allow multiple servers to serve the different requests)</li>
                    <li>authentication (to control access to different resources)</li>
                    <li>logging (allowing the storage of historical information)</li>

                </ul> 
            <hr>


               
            
            </div>
</div>
@endsection