




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


  <div class="tab-pane fade" id="div4" role="tabpanel" aria-labelledby="contact-tab">  


  <div class="tab-pane fade" id="div5" role="tabpanel" aria-labelledby="contact-tab">   
  
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
   </div>



