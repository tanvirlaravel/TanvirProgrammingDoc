@extends('inc.layout')

@section('content')
<h1 class="my-4 text-info text-center display-3">HTTP - Responses</h1>

<p>After receiving and interpreting a request message, a server responds with an HTTP response message:</p>
<h3>Message Status-Line</h3>
<h3>HTTP Version</h3>
<h3>Status Code</h3>
<p>The Status-Code element is a 3-digit integer </p>
<p><strong>1xx: Informational</strong> It means the request was received and the process is continuing.</p>
<p><strong>2xx: Success</strong> It means the action was successfully received, understood, and accepted.</p>
<p><strong>3xx: Redirection</strong> It means further action must be taken in order to complete the request.</p>
<p><strong>4xx: Client Error</strong> It means the request contains incorrect syntax or cannot be fulfilled.</p>
<p><strong>5xx: Server Error</strong> It means the server failed to fulfill an apparently valid request.</p>

<h3>Response Header Fields</h3>
<p>The response-header fields allow the server to pass additional information about the response which cannot be placed in the Status- Line. These header fields give information about the server and about further access to the resource identified by the Request-URI.</p>
<ul>
    <li>Accept-Ranges</li>
    <li>Age</li>
    <li>ETag</li>
    <li>Location</li>
    <li>Proxy-Authenticate</li>
    <li>Retry-After</li>
    <li>Server</li>
    <li>Vary</li>
    <li>WWW-Authenticate</li>
</ul>

<h3>Examples of Response Message</h3>
<pre class="bg-dark text-white">

    HTTP/1.1 200 OK
    Date: Mon, 27 Jul 2009 12:28:53 GMT
    Server: Apache/2.2.14 (Win32)
    Last-Modified: Wed, 22 Jul 2009 19:15:56 GMT
    Content-Length: 88
    Content-Type: text/html
    Connection: Closed


    &#60;html>
    &#60;body>
    &#60;h1>Hello, World!&#60;/h1>
    &#60;/body>
    &#60;/html>

</pre>



<pre class="bg-dark text-white">

    HTTP/1.1 404 Not Found
    Date: Sun, 18 Oct 2012 10:36:20 GMT
    Server: Apache/2.2.14 (Win32)
    Content-Length: 230
    Connection: Closed
    Content-Type: text/html; charset=iso-8859-1


    &#60;!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
    &#60;html>
    &#60;head>
    &#60;title>404 Not Found&#60;/title>
    &#60;/head>
    &#60;body>
    &#60;h1>Not Found&#60;/h1>
    &#60;p>The requested URL /t.html was not found on this server.&#60;/p>
    &#60;/body>
    &#60;/html>

</pre>



<pre class="bg-dark text-white">

    HTTP/1.1 400 Bad Request
    Date: Sun, 18 Oct 2012 10:36:20 GMT
    Server: Apache/2.2.14 (Win32)
    Content-Length: 230
    Content-Type: text/html; charset=iso-8859-1
    Connection: Closed

     &#60;!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
         &#60;html>
         &#60;head>
              &#60;title>400 Bad Request &#60;/title>
         &#60;/head>
         &#60;body>
              &#60;h1>Bad Request &#60;/h1>
              &#60;p>Your browser sent a request that this server could not understand. &#60;/p>
             &#60;p>The request line contained invalid characters following the protocol string. &#60;/p>
         &#60;/body>
     &#60;/html>
   
</pre>

@endsection