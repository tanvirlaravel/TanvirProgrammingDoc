@extends('inc.layout')

@section('content')


<h1 class="my-4 text-info text-center display-3">Overview</h1>
<div class="row">
    <div class="col">
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#div1" role="tab" aria-controls="home" aria-selected="true">HTTP protocol</a>
  </li>

  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#HTTP_requests" role="tab" aria-controls="home" aria-selected="true">HTTP requests</a>
  </li>

  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#HTTP_responses" role="tab" aria-controls="home" aria-selected="true">HTTP responses</a>
  </li>

  <li class="nav-item" role="presentation">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#div2" role="tab" aria-controls="profile" aria-selected="false">Components of HTTP</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#div3" role="tab" aria-controls="contact" aria-selected="false">Client: the user-agent</a>
  </li>

  <li class="nav-item" role="presentation">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#div4" role="tab" aria-controls="contact" aria-selected="false">The Web server</a>
  </li>

  <li class="nav-item" role="presentation">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#div5" role="tab" aria-controls="contact" aria-selected="false">Proxies</a>
  </li>

  <li class="nav-item" role="presentation">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#div6" role="tab" aria-controls="contact" aria-selected="false">Basic aspects of HTTP</a>
  </li>

  <li class="nav-item" role="presentation">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#div7" role="tab" aria-controls="contact" aria-selected="false">What can be controlled by HTTP</a>
  </li>

  <li class="nav-item" role="presentation">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#div8" role="tab" aria-controls="contact" aria-selected="false">HTTP flow</a>
  </li>

  <li class="nav-item" role="presentation">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#div9" role="tab" aria-controls="contact" aria-selected="false">HTTP Messages</a>
  </li>

  <li class="nav-item" role="presentation">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#div10" role="tab" aria-controls="contact" aria-selected="false">APIs based on HTTP</a>
  </li>

  <li class="nav-item" role="presentation">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#HTM_forms" role="tab" aria-controls="contact" aria-selected="false">HTML forms</a>
  </li>

  
  
  
</ul>
<div class="tab-content" id="myTabContent">
 
  <div class="tab-pane fade show active" id="div1" role="tabpanel" aria-labelledby="home-tab">
  <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">The HTTP protocol</h4>
       <p>A protocol standardizes communication over the internet. The Hypertext Transfer Protocol (HTTP) is used to transfer resources (e.g., HTML files, audio files, images, etc.) between a client and a server. A client is a machine that initiates the communication, and a server is a machine that needs to be contacted. HTTP runs over TCP.</p>
      
        <img src="img/Fetching_a_page.png" width="700" alt="">
        <p>Clients and servers communicate by exchanging individual messages (as opposed to a stream of data). The messages sent by the client, usually a Web browser, are called requests and the messages sent by the server as an answer are called responses.</p>

        <h3>A simple HTTP request</h3>
        <p>An HTTP request and response follow a particular format:</p>
        <ul>
            <li>request or response line</li>
            <li>header</li>
            <li>a blank line</li>
            <li>an optional message body (e.g., a file)</li>
        </ul>
        <p>In the following illustration, a client requests a server for index.html; the request line from the client is shown, and the server sends a response line along with the requested resource.</p>
        <img src="img/http_request_respnse.png" alt="" width="800">
        <p> An HTTP request is made by a client, to a named host, which is located on a server. The aim of the request is to access a resource on the server. An HTTP response is made by a server to a client. The aim of the response is to provide the client with the resource it requested, or to inform the client that the action it requested has been carried out, or to inform the client that an error occurred in processing its request. All these actions are described as "requirements". A client or server that fulfils the requirements for its version of the HTTP protocol is said to be "compliant" with the HTTP specification.</p>

  </div>

  <div class="tab-pane fade" id="HTTP_requests" role="tabpanel" aria-labelledby="profile-tab">
       <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">HTTP requests</h4>
      <p> An HTTP request is made by a client, to a named host, which is located on a server. The aim of the request is to access a resource on the server.</p>

<p>To make the request, the client uses components of a URL (Uniform Resource Locator), which includes the information needed to access the resource. The components of a URL explains URLs.</p>

<p>A correctly composed HTTP request contains the following elements:</p>
<ul>
    <li>A request line.</li>
    <li>A series of HTTP headers, or header fields.</li>
    <li>A message body, if needed.</li>
</ul>

<h3>Request line</h3>
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
<h3>HTTP headers</h3>
<p>HTTP headers are written on a message to provide the recipient with information about the message, the sender, and the way in which the sender wants to communicate with the recipient. Each HTTP header is made up of a name and a value. The HTTP protocol specifications define the standard set of HTTP headers, and describe how to use them correctly. HTTP messages can also include extension headers, which are not part of the HTTP/1.1 or HTTP/1.0 specifications.</p>
<p>The HTTP headers for a client's request contain information that a server can use to decide how to respond to the request. For example, the following series of headers can be used to specify that the user only wants to read the requested document in French or German, and that the document should only be sent if it has changed since the date and time when the client last obtained it:</p>
<p class="bg-dark text-white p-1">Accept-Language: fr, de<br>
If-Modified-Since: Fri, 10 Dec 2004 11:22:13 GMT</p>
<p>An empty line (that is, a CRLF alone) is placed in the request message after the series of HTTP headers, to divide the headers from the message body.</p>

<h3>Message body</h3>
<p>The body content of any HTTP message can be referred to as a message body or entity body. Technically, the entity body is the actual content of the message. The message body contains the entity body, which can be in its original state, or can be encoded in some way for transport, such as by being broken into chunks (chunked transfer-coding). The message body of a request may be referred to for convenience as a request body.</p>
<p>Message bodies are appropriate for some request methods and inappropriate for others. For example, a request with the POST method, which sends input data to the server, has a message body containing the data. A request with the GET method, which asks the server to send a resource, does not have a message body.</p>

  </div>

  <div class="tab-pane fade" id="div2" role="tabpanel" aria-labelledby="profile-tab">
       <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Components of HTTP-based systems</h4>
                <p>HTTP is a client-server protocol: requests are sent by one entity, the user-agent (or a proxy on behalf of it). Most of the time the user-agent is a Web browser, but it can be anything, for example a robot that crawls the Web to populate and maintain a search engine index.</p>
                <p>Each individual request is sent to a server, which handles it and provides an answer, called the response. Between the client and the server there are numerous entities, collectively called proxies, which perform different operations and act as gateways or caches, for example.</p>

                <img src="img/Client-server-chain.png" class="img-fluid">
                <p>In reality, there are more computers between a browser and the server handling the request: there are routers, modems, and more. Thanks to the layered design of the Web, these are hidden in the network and transport layers. HTTP is on top, at the application layer. Although important to diagnose network problems, the underlying layers are mostly irrelevant to the description of HTTP.</p>
  </div>

  <div class="tab-pane fade" id="HTTP_responses" role="tabpanel" aria-labelledby="profile-tab">
       <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">HTTP responses</h4>
       <p>An HTTP response is made by a server to a client. The aim of the response is to provide the client with the resource it requested, or inform the client that the action it requested has been carried out; or else to inform the client that an error occurred in processing its request.</p>
       <p>An HTTP response contains:</p>
       <ol>
           <li>A status line.</li>
           <li>A series of HTTP headers, or header fields.</li>
           <li>A message body, which is usually needed.</li>
       </ol>
       <h3>Status line</h3>
       <p>The status line is the first line in the response message. It consists of three items:</p>
       <ol>
           <li>The HTTP version number, showing the HTTP specification to which the server has tried to make the message comply.</li>
           <li>A status code, which is a three-digit number indicating the result of the request.</li>
           <li>A reason phrase, also known as status text, which is human-readable text that summarizes the meaning of the status code.</li>
       </ol>
       <p>An example of a response line is:</p>
       <p class="bg-dark text-white p-1">
       HTTP/1.1 200 OK
       </p>
       <p>In this example:</p>
       <ul>
           <li>the HTTP version is HTTP/1.1</li>
           <li>the status code is 200</li>
           <li>the reason phrase is OK</li>
       </ul>
       <p><a href="https://www.ibm.com/docs/en/cics-ts/5.3?topic=concepts-status-codes-reason-phrases#dfhtl_httpstatus">Status codes and reason phrases</a> explains more about these elements of the status line.</p>

       <h3>HTTP headers</h3>
       <p>The HTTP headers for a server's response contain information that a client can use to find out more about the response, and about the server that sent it. This information can assist the client with displaying the response to a user, with storing (or caching) the response for future use, and with making further requests to the server now or in the future. For example, the following series of headers tell the client when the response was sent, that it was sent by CICS®, and that it is a JPEG image:</p>
       <p class="bg-dark text-white p-1">
       Date: Thu, 09 Dec 2004 12:07:48 GMT<br>
Server: IBM_CICS_Transaction_Server/3.1.0(zOS)<br>
Content-type: image/jpg
       </p>
       <p>In the case of an unsuccessful request, headers can be used to tell the client what it must do to complete its request successfully.</p>

       <h3>Message body</h3>

       <p>The message body of a response may be referred to for convenience as a response body.</p>

<p>Message bodies are used for most responses. The exceptions are where a server is responding to a client request that used the HEAD method (which asks for the headers but not the body of the response), and where a server is using certain status codes.</p>

<p>For a response to a successful request, the message body contains either the resource requested by the client, or some information about the status of the action requested by the client. For a response to an unsuccessful request, the message body might provide further information about the reasons for the error, or about some action the client needs to take to complete the request successfully.</p>
               
  </div>


  <div class="tab-pane fade" id="div3" role="tabpanel" aria-labelledby="contact-tab">
        <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Client: the user-agent</h4>
                <p>The user-agent is any tool that acts on the behalf of the user. This role is primarily performed by the Web browser</p>
                <p>The browser is always the entity initiating the request. It is never the server (though some mechanisms have been added over the years to simulate server-initiated messages). </p>
                <p>To present a Web page, the browser sends an original request to fetch the HTML document that represents the page. It then parses this file, making additional requests corresponding to execution scripts, layout information (CSS) to display, and sub-resources contained within the page (usually images and videos). The Web browser then mixes these resources to present to the user a complete document, the Web page. Scripts executed by the browser can fetch more resources in later phases and the browser updates the Web page accordingly.</p>
                <p>A Web page is a hypertext document. This means some parts of displayed text are links which can be activated (usually by a click of the mouse) to fetch a new Web page.</p>
  </div>

  <div class="tab-pane fade" id="div4" role="tabpanel" aria-labelledby="contact-tab">  
  <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">The Web server</h4>

<p>On the opposite side of the communication channel, is the server, which serves the document as requested by the client</p>
<p>A server is not necessarily a single machine, but several server software instances can be hosted on the same machine. With HTTP/1.1 and the Host header, they may even share the same IP address.</p>   
  </div>

  <div class="tab-pane fade" id="div5" role="tabpanel" aria-labelledby="contact-tab">   
  <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Proxies</h4>

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
  </div>

  <div class="tab-pane fade" id="div6" role="tabpanel" aria-labelledby="contact-tab">  
  <h2 class="mt-5 mb-4 py-2 px-2 bg-success d-inline-block">Basic aspects of HTTP</h2>
                <br>

                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">HTTP is simple</h4>
                <p>nothing</p>

                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">HTTP is extensible</h4>
                <p>Introduced in HTTP/1.0, HTTP headers make this protocol easy to extend and experiment with. New functionality can even be introduced by a simple agreement between a client and a server about a new header's semantics.</p>

                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">HTTP is stateless, but not sessionless</h4>
                <p>HTTP is stateless: there is no link between two requests being successively carried out on the same connection. </p>
                <p>HTTP cookies allow the use of stateful sessions. Using header extensibility, HTTP Cookies are added to the workflow, allowing session creation on each HTTP request to share the same context, or the same state.</p>

                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">HTTP and connections</h4>
                <p>Before a client and server can exchange an HTTP request/response pair, they must establish a TCP connection,</p>   
  </div>

  <div class="tab-pane fade" id="div7" role="tabpanel" aria-labelledby="contact-tab"> 
  <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">What can be controlled by HTTP</h4>
                <p>Here is a list of common features controllable with HTTP.</p>
                <ul>
                    <li><b><a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Caching" target="_blank">Caching</a></b> How documents are cached can be controlled by HTTP. The server can instruct proxies and clients, about what to cache and for how long. The client can instruct intermediate cache proxies to ignore the stored document.</li>
                    <li><b>Relaxing the origin constraint</b></li>
                    <li><b>Authentication</b></li>
                    <li><b>Proxy and tunneling</b></li>
                    <li><b>Sessions</b></li>
                </ul>    
  </div>

  <div class="tab-pane fade" id="div8" role="tabpanel" aria-labelledby="contact-tab">   
  <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">HTTP flow</h4>

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
  </div>

  <div class="tab-pane fade" id="div9" role="tabpanel" aria-labelledby="contact-tab">   
  <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">HTTP Messages</h4>
                <p>There are two types of HTTP messages, requests and responses, each with its own format.</p>

                <h6 class="mt-6 mb-4 py-1 pl-5 pr-2 bg-success d-inline-block">Requests</h6>

                <h6 class="mt-6 mb-4 py-1 pl-5 pr-2 bg-success d-inline-block">HTTP Messages</h6>
                <img src="img/HTTP_Request.png" alt="">
                <p>Requests consists of the following elements:</p>
                <ul>
                    <li>An HTTP method, usually a verb like GET, POST or a noun like OPTIONS or HEAD that defines the operation the client wants to perform. Typically, a client wants to fetch a resource (using GET) or post the value of an HTML form (using POST), though more operations may be needed in other cases.</li>
                    <li>The path of the resource to fetch; the URL of the resource stripped from elements that are obvious from the context, for example without the protocol (http://), the domain (here, developer.mozilla.org), or the TCP port (here, 80).</li>
                    <li>The version of the HTTP protocol.</li>
                    <li>Optional headers that convey additional information for the servers.</li>
                    <li>Or a body, for some methods like POST, similar to those in responses, which contain the resource sent.</li>
                </ul>

                <h6 class="mt-6 mb-4 py-1 pl-5 pr-2 bg-success d-inline-block">Responses</h6>
                <img src="img/HTTP_Response.png" alt="">
                <p>Responses consist of the following elements:</p>
                <ul>
                    <li>Responses consist of the following elements:</li>
                    <li>A status code, indicating if the request was successful, or not, and why.</li>
                    <li>A status message, a non-authoritative short description of the status code.</li>
                    <li>HTTP headers, like those for requests.</li>
                    <li>Optionally, a body containing the fetched resource.</li>
                </ul>  
  </div>

  <div class="tab-pane fade" id="div10" role="tabpanel" aria-labelledby="contact-tab">   
  <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">APIs based on HTTP</h4>
                <p>The most commonly used API based on HTTP is the <a href="https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest" target="_blank">XMLHttpRequest</a> API, which can be used to exchange data between a user agent and a server. The modern <a href="https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API" target="_blank">Fetch API</a> provides the same features with a more powerful and flexible feature set.</p>

                <p>Another API, <a href="https://developer.mozilla.org/en-US/docs/Web/API/Server-sent_events" target="_blank">server-sent</a> events, is a one-way service that allows a server to send events to the client, using HTTP as a transport mechanism. Using the <a href="https://developer.mozilla.org/en-US/docs/Web/API/EventSource" target="_blank">EventSource</a> interface, the client opens a connection and establishes event handlers. The client browser automatically converts the messages that arrive on the HTTP stream into appropriate <a href="https://developer.mozilla.org/en-US/docs/Web/API/Event" target="_blank">Event</a> objects, delivering them to the event handlers that have been registered for the events' <a href="https://developer.mozilla.org/en-US/docs/Web/API/Event/type" target="_blank">type</a>a> if known, or to the <a href="https://developer.mozilla.org/en-US/docs/Web/API/EventSource/onmessage" target="_blank">onmessage</a>a> event handler if no type-specific event handler was established.</p>  
  </div>

  <div class="tab-pane fade" id="HTM_forms" role="tabpanel" aria-labelledby="contact-tab">   
  <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">HTML forms</h4>
            
 <p>In HTML, forms are areas delimited by a &#60;form> tag, containing text input boxes, buttons, check boxes, and other features of a graphical user interface. Forms are used by web applications to allow users to provide data to be sent to the server.</p>

<p>In a form, the elements with which users can interact to provide data are known as form fields. Each form field is given a name in the HTML, which identifies it to the server application, but is not visible to the user.</p>

<p>Although the various elements of a form appear different to the user, they all transmit information to the server application as a series of name and value pairs, separated by & characters. Each name is the name of a form field, and the value is the data produced by the user's actions. For example, here is a form with two text input boxes for a user to enter first and last name:</p>
  
<p class="text-white bg-dark p-1">
firstname=Maria&lastname=Smith
</p>

<p>The form data is transmitted to the server in one of two ways, depending on which method (GET or POST) is specified in the &#60;form> tag:</p>
<ol>
   <li>When the method is GET, the form data is transmitted in a query string in the URL.</li>
   <li>When the method is POST, the form data is transmitted in the message body.</li>
                </ol>

<p>
The character set that is required for encoding the form data is specified by the CHARACTERSET option, and must match the forms encoding determined by the corresponding HTML form.</p>
  </div>




</div>
    </div>
  
</div>



@endsection