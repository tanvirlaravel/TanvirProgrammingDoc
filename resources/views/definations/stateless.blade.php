@extends('inc.layout')

@section('content')


<h1 class="my-4 text-info text-center display-3">HTTP is a stateless protocol</h1>


<p>
HTTP is a stateless protocol. This means a HTTP server needs not keep track of any state information. So,
</p>

<ul>
    <li>At any time, client can send any valid command. The server will not relate this command to any previous or future commands. Each command is independent of any other commands, past or future. Compare this to a stateful protocol like POP3: after you enter a USER command you must enter a PASS command.</li>
    <li>A HTTP server wil not remember whether a client has visited it before, or how many time.</li>
</ul>

<hr>
<p>HTTP is called as a stateless protocol because each request is executed independently, without any knowledge of the requests that were executed before it, which means once the transaction ends the connection between the browser and the server is also lost.</p>
<p>What makes the protocol stateless is that in its original design, HTTP is a relatively simple file transfer protocol:</p>
<ol>
    <li>make a request for a file named by a URL,</li>
    <li>get the file in response,</li>
    <li>disconnect.</li>
</ol>
<p>There was no relationship maintained between one connection and another, even from the same client. This simplifies the contract between client and server, and in many cases minimizes the amount of data that needs to be transferred.</p>
<hr>
<p>Once the request is made and the response is rendered back to the client the connection will be dropped or terminated. The server will forget all about the requester.</p>




@endsection