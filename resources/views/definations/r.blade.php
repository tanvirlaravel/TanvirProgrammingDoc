@extends('inc.layout')

@section('content')

<div class="row">
    <div class="col">
    <h1 class="mb-4 mt-1 text-primary heding-one">M</h1>
    <hr id="top-heading">
    </div>
</div>

<div class="row">

    <div class="col-3">
            <ul class="list-group position-fixed" id="sidebar_menu">         
            </ul>
        </div>

            <div class="col-md-9">
                <h2>Run vs Compile times</h2>
                <ul>
                    <li>PHP makes two passes (by default) anytime it runs a file.</li>
                    <li>Pass #1 parses the file and builds what is called operational(or machine) code. This is the raw binary format your computer will actually run and it is not human readable. In other languages (like C++, etc) this is called compiling. You can cache this step using various systems like Opcache, which saves you the overhead of compiling this every <time class=""></time></li>
                    <li>Syntax errors come from this portion of the execution.</li>
                    <li>Pass #2 executes the operational code from Pass #1. This is what is commonly called "run time", because your computer is actually executing the instructions.</li>
                    <li>Run-time errors (like exhausting memory, abnormal termination, etc) come from this level. These are considerably less common than syntax errors, however.</li>
                </ul>
                <hr>

                <h2>Request line</h2>
                <ol>
                    <li>A method. The method is a one-word command that tells the server what it should do with the resource. For example, the server could be asked to send the resource to the client.</li>
                    <li>The path component of the URL for the request. The path identifies the resource on the server.</li>
                    <li>The HTTP version number, showing the HTTP specification to which the client has tried to make the message comply.</li>
                </ol>

                <p class="bg-dark text-white p-1">GET /software/htp/cics/index.html HTTP/1.1</p>
                <p>In this example:</p>
                <ul>
                    <li>the method is GET</li>
                    <li>the path is /software/htp/cics/index.html</li>
                    <li>the HTTP version is HTTP/1.1</li>
                </ul>

                <p>A request line might contain some additional items:</p>
                <ul>
                    <li>A query string. This provides a string of information that the resource can use for some purpose. It follows the path, and is preceded by a question mark.</li>
                    <li>The scheme and host components of the URL, in addition to the path. When the resource location is specified in this way, it is known as the absolute URI form. For HTTP/1.1, this form is used when a request will go through a proxy server. Also for HTTP/1.1, if the host component of the URL is not included in the request line, it must be included in the message in a Host header.
                </li>
                </ul>
                <hr>

                
               
            
            </div>
</div>
@endsection