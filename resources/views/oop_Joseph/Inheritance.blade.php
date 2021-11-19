@extends('inc.layout')

@section('content')


<h1 class="mb-4 mt-1 text-primary heding-one">Inheritance in object oriented   programming</h1>
<hr id="top-heading">
<div class="row">
    <div class="col-3">
        <ul class="list-group position-fixed" id="sidebar_menu">         
        </ul>
    </div>

    <div class="col-9">
    <h2 class="text-info">Introduction</h2>
    <p>One of the main advantages of object-oriented programming is the ability to reduce code duplication
        with inheritance. Code duplication occurs when a programmer writes the same code more than
        once, a problem that inheritance strives to solve. In inheritance, we have a parent class with its
        own methods and properties, and a child class (or classes) that can use the code from the parent. By
        using inheritance, we can create a reusable piece of code that we write only once in the parent class,
        and use again as much as we need in the child classes.</p>
        <hr>

        <h2 class="text-info">Override the parent’s properties and methods</h2>
        <p>In the same way that the child class can have its own properties and methods, it can override the
            properties and methods of the parent class. When we override the class’s properties and methods, we
            rewrite a method or property that exists in the parent again in the child, but assign to it a different
            value or code</p>
        <hr>

        <h2 class="text-info">Prevent the child class from overriding the parent’s methods</h2>
            <p>In order to prevent the method in the child class from overriding the parent’s methods, we can prefix
                the method in the parent with the final keyword.</p>
 

         
        






    
    <p class="my-5">.</p>
    </div>
</div>


@endsection