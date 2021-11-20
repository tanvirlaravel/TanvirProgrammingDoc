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
                <h2>Memory</h2>
                <p>A memory is just like a human brain. It is used to store data and instructions. Computer memory is the storage space in the computer, where data is to be processed and instructions required for processing are stored. The memory is divided into large number of small parts called cells. Each location or cell has a unique address, which varies from zero to memory size minus one. For example, if the computer has 64k words, then this memory unit has 64 * 1024 = 65536 memory locations. The address of these locations varies from 0 to 65535.</p>

                <p>In computing, memory refers to a device that is used to store information for immediate use in a computer or related computer hardware device.[1] It typically refers to semiconductor memory, specifically metal–oxide–semiconductor (MOS) memory,[2][3] where data is stored within MOS memory cells on a silicon integrated circuit chip.</p>
                <p>Most semiconductor memory is organized into memory cells or bistable flip-flops, each storing one bit (0 or 1).</p>

                <p>Memory is primarily of three types −</p>
                <ul>
                    <li>Cache Memory</li>
                    <li>Primary Memory/Main Memory</li>
                    <li>Secondary Memory</li>
                </ul>
                <hr>

                
                <h2>Message body</h2>
                <p>The body content of any HTTP message can be referred to as a message body or entity body. Technically, the entity body is the actual content of the message. The message body contains the entity body, which can be in its original state, or can be encoded in some way for transport, such as by being broken into chunks (chunked transfer-coding). The message body of a request may be referred to for convenience as a request body.</p>
                <p>Message bodies are appropriate for some request methods and inappropriate for others. For example, a request with the POST method, which sends input data to the server, has a message body containing the data. A request with the GET method, which asks the server to send a resource, does not have a message body.</p>
                <hr>

                
               
            
            </div>
</div>
@endsection