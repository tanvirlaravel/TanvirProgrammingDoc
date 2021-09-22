@extends('inc.layout')

@section('content')

<h1 class="my-4 text-info text-center display-3">http-home</h1>

<p>
The Hypertext Transfer Protocol (HTTP) is an application-level protocol for distributed, collaborative, hypermedia information systems. This is the foundation for data communication for the World Wide Web (i.e. internet) since 1990. 
</p>
<p>HTTP is a generic and <a href="{{ route('definations.stateless') }}" target="_blank">stateless protocol</a> which can be used for other purposes as well using extensions of its request methods, error codes, and headers.</p>



@endsection