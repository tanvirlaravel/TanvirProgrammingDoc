@extends('inc.layout')

@section('content')


<h1 class="mb-4 mt-1 text-primary heding-one">How to create classes and objects?</h1>
<hr id="top-heading">
<div class="row">
    <div class="col-3">
        <ul class="list-group position-fixed" id="sidebar_menu">         
        </ul>
    </div>

    <div class="col-9">

     <h2 class="text-info">Introduction</h2>
     <p>Object-oriented programming is a programming style in which it is customary to group all of
        the variables and functions of a particular topic into a single class.it supports better code organization, provides modularity, and reduces the need to repeat ourselves. 
        </p>
        <hr>

        <h2 class="text-info">How to create classes</h2>
        <p>we can group all of the code that handles the users of a blog into one class, all of the code that is
            involved with the publication of the posts in the blog into a second class, and all the code that is
            devoted to comments into a third class</p>
        
        <ul>
            <li>We write the name of the class and capitalize the first letter</li>
            <li>If the class name contains more than one word, we capitalize each word. This is known as
                upper camel case. For example, <code>JapaneseCars, AmericanIdol, EuropeTour,</code> etc.
                </li>
            <li>
                If the property name contains more than one word, all of the words, except for the first word, start with
an upper case letter. For example, <code>$color or $hasSunRoof</code>.
            </li>
        </ul>
        <hr>

        <h2 class="text-info">How to create objects from a class</h2>
        <p>The process of creating an object is also known as <strong><code>instantiation</code></strong>.</p>

        <h2 class="text-info">Objects what are they good for?</h2>
        <p>
            While in the procedural style of programming, all of the functions and variables sit together in the
<strong><code>global scope</code></strong> in a way that allows their use just by calling their name, the use of classes makes
anything inside the classes hidden from the global scope. That’s because the code inside the classes
is encapsulated within the <strong><code>class scope</code></strong>, outside the reach of the global scope. So, we need a way to
allow the code from the global scope to use the code within the class, and we do this by creating
objects from a class
        </p>

        <img src="{{ asset('img/oop_Joseph/class&Objects.png') }}" class="img-fluid" alt="">
        <hr>

        <h2 class="text-info">How to add methods to a class?</h2>
        <p>If the name contains more than one word, all of the words, except for the first word, start with
            an upper case letter. For example, <code>helloUser() or flyPanAm()</code></p>

 

         
        






    
    <p class="my-5">.</p>
    </div>
</div>


@endsection