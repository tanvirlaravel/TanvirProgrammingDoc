@extends('inc.layout')

@section('content')


<h1 class="mb-4 mt-1 text-primary heding-one">Abstract classes and methods</h1>
<hr id="top-heading">
<div class="row">
    <div class="col-3">
        <ul class="list-group position-fixed" id="sidebar_menu">         
        </ul>
    </div>

    <div class="col-9">
   
        <h2 class="text-info">Introduction</h2>
        <p>
            We use abstract classes when we want <strong><code>to commit the programmer</code></strong> (either oneself or someone else)
to write a certain class method, but we are only sure about the name of the method, and not the
details of how it should be written. To take an example, circles, rectangles, octagons, etc. may all look
different, but are all 2D shapes nonetheless, and thus all possess the traits of area and circumference.
So, it makes perfect sense to group the code that they have in common into one parent class. In this
parent class, we would have the two properties of area and circumference, and we may very well
have a method that calculates the area (which might be problematic since different shapes require
different calculations). In these kinds of cases, when we need to commit the child classes to certain
methods that they inherit from the parent class but we cannot commit about the code that should
be used in the methods, we use abstract classes
        </p>
        <p>We use abstract classes and methods when we need to commit the child classes to certain
            methods that they inherit from the parent class but we cannot commit about the code
            that should be written inside the methods</p>
    <p>
        An abstract class is a class that has at least one abstract method. Abstract methods can only have
names and arguments, and no other code. Thus, we cannot create objects out of abstract classes.
Instead, we need to create child classes that add the code into the bodies of the methods, and use
these child classes to create objects.

    </p>
    <hr>

    <h2 class="text-info">What are the main reasons for using an abstract class in the code?</h2>
    <p>The main reason for using an abstract class is to commit the child classes to methods.
    </p>
 

         
        






    
    <p class="my-5">.</p>
    </div>
</div>


@endsection