@extends('inc.layout')

@section('content')

<h1 class="my-4 text-info text-center display-3">HTTP - Overview</h1>

<p>
Basically, HTTP is a TCP/IP based communication protocol, that is used to deliver data (HTML files, image files, query results, etc.) on the World Wide Web. The default port is TCP 80, but other ports can be used as well. </p>

<p>It provides a standardized way for computers to communicate with each other. HTTP specification specifies how clients' request data will be constructed and sent to the server, and how the servers respond to these requests.</p>
<h3>Basic Features</h3>
<p>There are three basic features that make HTTP a simple but powerful protocol:</p>
<ol>
    <li><strong>HTTP is connectionless:</strong> The HTTP client, i.e., a browser initiates an HTTP request and after a request is made, the client waits for the response. The server processes the request and sends a response back after which client disconnect the connection. So client and server knows about each other during current request and response only. Further requests are made on new connection like client and server are new to each other.</li>
    <li><strong>HTTP is media independent:</strong> It means, any type of data can be sent by HTTP as long as both the client and the server know how to handle the data content. It is required for the client as well as the server to specify the content type using appropriate MIME-type.</li>
    <li><strong>HTTP is stateless:</strong>  As mentioned above, HTTP is connectionless and it is a direct result of HTTP being a stateless protocol. The server and client are aware of each other only during a current request. Afterwards, both of them forget about each other. Due to this nature of the protocol, neither the client nor the browser can retain information between different requests across the web pages.</li>
</ol>
<p>web browsers, robots and search engines, etc. act like HTTP clients, and the Web server acts as a server.</p>
<h3>Client</h3>
<p>The HTTP client sends a request to the server in the form of a request method, URI, and protocol version, followed by a MIME-like message containing request modifiers, client information, and possible body content over a TCP/IP connection.</p>

<h3>Server</h3>
<p>The HTTP server responds with a status line, including the message's protocol version and a success or error code, followed by a MIME-like message containing server information, entity meta information, and possible entity-body content.</p>


@endsection