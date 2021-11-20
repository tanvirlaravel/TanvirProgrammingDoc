@extends('inc.layout')

@section('content')

<div class="row">
    <div class="col">
    <h1 class="mb-4 mt-1 text-primary heding-one">H</h1>
    <hr id="top-heading">
    </div>
</div>

<div class="row">

    <div class="col-3">
            <ul class="list-group position-fixed" id="sidebar_menu">         
            </ul>
        </div>

            <div class="col-md-9">
                <h2>HTTP METHODS</h2>
               
                <p>Every HTTP request has a “verb,” or action, along with it. Laravel allows you to define your routes based on which verb was used; the most common are GET and POST, followed by PUT, DELETE, and PATCH. Each method communicates a different thing to the server, and to your code, about the intentions of the caller.</p>
                <hr>

                <h2>HTTP verbs</h2>                
                <p> HTTP defines a set of request methods to indicate the desired action to be performed for a given resource</p>
                <h4>GET</h4>
                <p>The GET method requests a representation of the specified resource. Requests using GET should only retrieve data.</p>
                
                <h4>HEAD</h4>
                <p></p>The HEAD method asks for a response identical to that of a GET request, but without the response body.</p>
                
                <h4>POST</h4>
                <p>The POST method is used to submit an entity to the specified resource, often causing a change in state or side effects on the server.</p>
                
                <h4>PUT</h4>
                <p>The PUT method replaces all current representations of the target resource with the request payload.</p>
                <h4>PATCH</h4>
                <p></p>The PATCH method is used to apply partial modifications to a resource.</p>
                
                <h4>DELETE</h4>
                <p> The DELETE method deletes the specified resource.</p>
                
                <h4>Connect</h4>
                <p>The CONNECT method establishes a tunnel to the server identified by the target resource.</p>
                
                <h4>Options</h4>
                <p> The OPTIONS method is used to describe the communication options for the target resource.</p>
                
                <h4>Trace</h4>
                <p>The TRACE method performs a message loop-back test along the path to the target resource.</p>
               <hr>

               <h2>HTTP requests</h2>
                <p> An HTTP request is made by a client, to a named host, which is located on a server. The aim of the request is to access a resource on the server.</p>

                <p>To make the request, the client uses components of a URL (Uniform Resource Locator), which includes the information needed to access the resource. The components of a URL explains URLs.</p>

                <p>A correctly composed HTTP request contains the following elements:</p>
                <ul>
                    <li>A request line.</li>
                    <li>A series of HTTP headers, or header fields.</li>
                    <li>A message body, if needed.</li>
                </ul>
                <hr>

                <h2>HTTP headers</h2>
                <p>HTTP headers are written on a message to provide the recipient with information about the message, the sender, and the way in which the sender wants to communicate with the recipient. Each HTTP header is made up of a name and a value. The HTTP protocol specifications define the standard set of HTTP headers, and describe how to use them correctly. HTTP messages can also include extension headers, which are not part of the HTTP/1.1 or HTTP/1.0 specifications.</p>
                <p>The HTTP headers for a client's request contain information that a server can use to decide how to respond to the request. For example, the following series of headers can be used to specify that the user only wants to read the requested document in French or German, and that the document should only be sent if it has changed since the date and time when the client last obtained it:</p>
                <p class="bg-dark text-white p-1">Accept-Language: fr, de<br>
                If-Modified-Since: Fri, 10 Dec 2004 11:22:13 GMT</p>
                <p>An empty line (that is, a CRLF alone) is placed in the request message after the series of HTTP headers, to divide the headers from the message body.</p>

                <hr>

                <h2>HTTP Messages</h2>
                <p>There are two types of HTTP messages, requests and responses, each with its own format.</p>

                <h4 class="mt-6 mb-4 py-1 pl-5 pr-2 bg-success d-inline-block">Requests</h4>

                <h4 class="mt-6 mb-4 py-1 pl-5 pr-2 bg-success d-inline-block">HTTP Messages</h4>
                <img src="img/HTTP_Request.png" alt="">
                <p>Requests consists of the following elements:</p>
                <ul>
                    <li>An HTTP method, usually a verb like GET, POST or a noun like OPTIONS or HEAD that defines the operation the client wants to perform. Typically, a client wants to fetch a resource (using GET) or post the value of an HTML form (using POST), though more operations may be needed in other cases.</li>
                    <li>The path of the resource to fetch; the URL of the resource stripped from elements that are obvious from the context, for example without the protocol (http://), the domain (here, developer.mozilla.org), or the TCP port (here, 80).</li>
                    <li>The version of the HTTP protocol.</li>
                    <li>Optional headers that convey additional information for the servers.</li>
                    <li>Or a body, for some methods like POST, similar to those in responses, which contain the resource sent.</li>
                </ul>

                <h4 class="mt-6 mb-4 py-1 pl-5 pr-2 bg-success d-inline-block">Responses</h4>
                <img src="img/HTTP_Response.png" alt="">
                <p>Responses consist of the following elements:</p>
                <ul>
                    <li>Responses consist of the following elements:</li>
                    <li>A status code, indicating if the request was successful, or not, and why.</li>
                    <li>A status message, a non-authoritative short description of the status code.</li>
                    <li>HTTP headers, like those for requests.</li>
                    <li>Optionally, a body containing the fetched resource.</li>
                </ul> 
                <hr>

                <h2>HTTP flow</h2>

                <p>When a client wants to communicate with a server, either the final server or an intermediate proxy, it performs the following steps:</p>
                <ol>
                    <li>Open a TCP connection: The TCP connection is used to send a request, or several, and receive an answer. The client may open a new connection, reuse an existing connection, or open several TCP connections to the servers.</li>
                    <li>Send an HTTP message: HTTP messages (before HTTP/2) are human-readable. With HTTP/2, these simple messages are encapsulated in frames, making them impossible to read directly, but the principle remains the same. For example:
                        <pre class="p-3 text-white-50 bg-dark">
                GET / HTTP/1.1
                Host: developer.mozilla.org
                Accept-Language: fr
                </pre>
                    </li>
                    <li>Read the response sent by the server, such as:
                        <pre class="p-3 text-white-50 bg-dark">
                HTTP/1.1 200 OK
                Date: Sat, 09 Oct 2010 14:28:02 GMT
                Server: Apache
                Last-Modified: Tue, 01 Dec 2009 20:18:22 GMT
                ETag: "51142bc1-7449-479b075b2891b"
                Accept-Ranges: bytes
                Content-Length: 29769
                Content-Type: text/html
                
                &lt;!DOCTYPE html... (here comes the 29769 bytes of the requested web page)
                </pre>
                    </li>
                    <li>Close or reuse the connection for further requests.</li>
                </ol>
                <p>If HTTP pipelining is activated, several requests can be sent without waiting for the first response to be fully received. HTTP pipelining has proven difficult to implement in existing networks, where old pieces of software coexist with modern versions. HTTP pipelining has been superseded in HTTP/2 with more robust multiplexing requests within a frame.</p>  
                




<p class="py-5">.</p>            
            </div>
</div>
@endsection