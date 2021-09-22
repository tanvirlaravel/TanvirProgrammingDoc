@extends('inc.layout')

@section('content')


<h1 class="my-4 text-info text-center display-3">HTTP - Messages</h1>

<p>HTTP is based on the client-server architecture model and a stateless request/response protocol that operates by exchanging messages across a reliable TCP/IP connection.</p>

<p>
An HTTP "client" is a program (Web browser or any other client) that establishes a connection to a server for the purpose of sending one or more HTTP request messages. </p>

<p>HTTP makes use of the Uniform Resource Identifier (URI) to identify a given resource and to establish a connection. Once the connection is established, HTTP messages are passed in a format similar to that used by the Internet mail [RFC5322] and the Multipurpose Internet Mail Extensions (MIME) [RFC2045]. These messages include requests from client to server and responses from server to client which will have the following format:</p>

<h3>
Header Fields
</h3>
<p class="bg-dark text-white p-2">
User-Agent: curl/7.16.3 libcurl/7.16.3 OpenSSL/0.9.7l zlib/1.2.3<br>
Host: www.example.com<br>
Accept-Language: en, mi<br>
Date: Mon, 27 Jul 2009 12:28:53 GMT<br>
Server: Apache<br>
Last-Modified: Wed, 22 Jul 2009 19:15:56 GMT<br>
ETag: "34aa387-d-1568eb00"<br>
Accept-Ranges: bytes<br>
Content-Length: 51<br>
Vary: Accept-Encoding<br>
Content-Type: text/plain
</p>

<h3>Message Body</h3>
<p>The message body part is optional for an HTTP message but if it is available, then it is used to carry the entity-body associated with the request or response. If entity body is associated, then usually Content-Type and Content-Length headers lines specify the nature of the body associated.</p>
<p>A message body is the one which carries the actual HTTP request data (including form data and uploaded, etc.) and HTTP response data from the server ( including files, images, etc.). Shown below is the simple content of a message body:</p>

<pre>
&#60;html>
    &#60;body>
   
        &#60;h1>Hello, World!&#60;/h1>
   
    &#60;/body>
&#60;/html>
</pre>

@endsection