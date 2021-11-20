@extends('inc.layout')

@section('content')

<div class="row">
    <div class="col">
    <h1 class="mb-4 mt-1 text-primary heding-one">F</h1>
    <hr id="top-heading">
    </div>
</div>

<div class="row">

    <div class="col-3">
            <ul class="list-group position-fixed" id="sidebar_menu">         
            </ul>
        </div>

            <div class="col-md-9">
                <h2>HTML forms</h2>
            
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
               <hr>
               
            
            </div>
</div>
@endsection