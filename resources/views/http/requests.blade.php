@extends('inc.layout')

@section('content')

<h1 class="my-4 text-info text-center display-3">HTTP - Requests</h1>

<p>An HTTP client sends an HTTP request to a server in the form of a request message which includes following format:</p>
<pre class="bg-dark text-white">

    A Request-line

    Zero or more header (General|Request|Entity) fields followed by CRLF

    An empty line (i.e., a line with nothing preceding the CRLF) indicating the end of the header fields

    Optionally a message-body

</pre>

<h3>Request-Line</h3>
<p>The Request-Line begins with a method token, followed by the Request-URI and the protocol version, and ending with CRLF. </p>
<h3>Request Method</h3>

<h4>GET</h4>
<p>The GET method is used to retrieve information from the given server using a given URI. Requests using GET should only retrieve data and should have no other effect on the data.</p>

<h4>HEAD</h4>
<p>Same as GET, but it transfers the status line and the header section only.</p>

<h4>POST</h4>
<p>A POST request is used to send data to the server, for example, customer information, file upload, etc. using HTML forms</p>

<h4>PUT</h4>
<p>Replaces all the current representations of the target resource with the uploaded content.</p>

<h4>DELETE</h4>
<p>Removes all the current representations of the target resource given by URI.</p>

<h4>CONNECT</h4>
<p>Establishes a tunnel to the server identified by a given URI.</p>

<h4>OPTIONS</h4>
<p>Describe the communication options for the target resource.</p>

<h4>TRACE</h4>
<p>Performs a message loop back test along with the path to the target resource.</p>

<h3>Request Header Fields</h3>
<p>The request-header fields allow the client to pass additional information about the request, and about the client itself, to the server. These fields act as request modifiers.Here is a list of some important Request-header fields that can be used based on the requirement:</p>
<ul>
    <li>Accept-Charset</li>
    <li>Accept-Encoding</li>
    <li>Accept-Language</li>
    <li>Authorization</li>
    <li>Expect</li>
    <li>From</li>
    <li>Host</li>
    <li>If-Match</li>
    <li>If-Modified-Since</li>
    <li>If-None-Match</li>
    <li>If-Range</li>
    <li>If-Unmodified-Since</li>
    <li>Max-Forwards</li>
    <li>Proxy-Authorization</li>
    <li>Range</li>
    <li>Referer</li>
    <li>TE</li>
    <li>User-Agent</li>
</ul>

<pre class="bg-dark text-white">

 GET /hello.htm HTTP/1.1
 User-Agent: Mozilla/4.0 (compatible; MSIE5.01; Windows NT)
 Host: www.tutorialspoint.com
 Accept-Language: en-us
 Accept-Encoding: gzip, deflate
 Connection: Keep-Alive

</pre>

<p>Here we are not sending any request data to the server because we are fetching a plain HTML page from the server. Connection is a general-header, and the rest of the headers are request headers.</p>

<p>The following example shows how to send form data to the server using request message body:</p>

<pre class="bg-dark text-white">

    POST /cgi-bin/process.cgi HTTP/1.1
    User-Agent: Mozilla/4.0 (compatible; MSIE5.01; Windows NT)
    Host: www.tutorialspoint.com
    Content-Type: application/x-www-form-urlencoded
    Content-Length: length
    Accept-Language: en-us
    Accept-Encoding: gzip, deflate
    Connection: Keep-Alive

    licenseID=string&content=string&/paramsXML=string

</pre>

<p>Here the given URL /cgi-bin/process.cgi will be used to process the passed data and accordingly, a response will be returned. Here content-type tells the server that the passed data is a simple web form data and length will be the actual length of the data put in the message body. </p>
<p>The following example shows how you can pass plain XML to your web server:</p>

<pre class="bg-dark text-white">

    POST /cgi-bin/process.cgi HTTP/1.1
    User-Agent: Mozilla/4.0 (compatible; MSIE5.01; Windows NT)
    Host: www.tutorialspoint.com
    Content-Type: text/xml; charset=utf-8
    Content-Length: length
    Accept-Language: en-us
    Accept-Encoding: gzip, deflate
    Connection: Keep-Alive

    &#60;?xml version="1.0" encoding="utf-8"?>
    &#60;string xmlns="http://clearforest.com/">string&#60;/string>

</pre>

@endsection