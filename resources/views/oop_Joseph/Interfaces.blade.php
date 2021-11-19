@extends('inc.layout')

@section('content')


<h1 class="mb-4 mt-1 heding-one">Interfaces - the next level of  abstraction</h1>
<hr id="top-heading">

<div class="row">
    <div class="col-3">
        <ul class="list-group position-fixed" id="sidebar_menu">         
        </ul>
    </div>

    <div class="col-9">
   
        <h2>Introduction</h2>
        <p>
            Interfaces resemble abstract classes in that they include abstract methods that the programmer
            must define in the classes that inherit from the interface. In this way, interfaces contribute to code
            organization because they commit the child classes to the methods that they should implement. The
            use of interfaces become very helpful when we work in a team of programmers and want to ensure
            that all the programmers write the methods that they should work on, or even in the case of a single
            programmer that wants to commit himself to write certain methods in the child classes.
            
        </p>
        <p>Interfaces, like abstract classes, include abstract methods and constants. However, unlike abstract
            classes, interfaces can have only public methods, and cannot have variables.</p>
        <p>The classes that implement the interfaces must define all the methods that they inherit from the
            interfaces, including all the parameters</p>
            <hr>

        <h2>What are the differences between abstract classes
            and interfaces?</h2>
        <p>We saw that abstract classes and interfaces are similar in that they provide abstract methods that
            can be implemented only in the child classes. However, they still have the following differences:</p>
        <ul>
            <li>Interfaces can include abstract methods and constants, but cannot contain concrete methods
                and variables</li>
            <li>All the methods in the interface must be in the public visibility scope.</li>
            <li>A class can implement more than one interface, while it can inherit from only one abstract
                class.</li>
        </ul>
     
 

         
        






    
    <p class="my-5">.</p>
    </div>
</div>


@endsection