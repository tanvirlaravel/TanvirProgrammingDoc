@extends('inc.layout')

@section('content')


<h1 class="mb-4 mt-1 text-primary heding-one">Introduction</h1>
<hr id="top-heading">
<div class="row">
    <div class="col-3">
        <ul class="list-group position-fixed" id="sidebar_menu">         
        </ul>
    </div>

    <div class="col-9">

      <h2 class="text-info">Why bother learning object oriented PHP?</h2>
      <p>Object oriented programming is the <strong><code>programming style</code></strong> </p>
      <p>Object oriented code is more organized. Distinct units are created for a single purpose. This means
        it is easier to find things in the code (ending those days of spending hours trawling through lines
        of spaghetti code to find a single element). It is also easier to add, replace, or remove parts of code,
        as it only has to be done once. With procedural programming, on the other hand, it is necessary to
        change every instance</p>
      <p>Finally, object oriented programming gives the opportunity to developers to integrate code libraries
        from other resources without worrying about name collisions, even though some of the functions
        in the code might have the same name</p>
        <p>Programming in object oriented PHP requires a different way of thinking.</p>
        <hr>

        <h2 class="text-info">The purpose of OOP</h2>
        <p>At the heart of all of this isthe principle of modularity. This principle is what makes object oriented
            PHP possible. It essentially means separating the code of an application into much smaller and easier
            to use parts. It makes the code more flexible, as well as easier to change, update, debug, and develo</p>
        <p>
            It also saves huge amounts of time. With modularity, programmers can change the code of an
application simply by working on the specific, relevant sections, instead of looking at the whole
thing. Adding, removing, or changing functions is therefore quicker.
        </p>
        <p>
            Time is also saved because modularity allows the work of other programmers to be easily
incorporated into a project. This means developers can use tried and tested functions written
elsewhere, and they can put them into the code without heavy adaptation
        </p>
        <p>
            Finally, modularity saves time because it better facilitates multiple people working on a single
project. Without it, a small change to the code from one programmer can have repercussions across
many workstations, but modularity solves this.
        </p>
        <p>
            Take a blog as an example. This is a simple application but it might still have several classes. This
can include a user class, a database class, a posts class, and a mail class. With modularity and object
oriented PHP, each of these classes has its own section in the code. This section can be handled
independently of the others. This means it is possible to add, remove, or replace parts of the code
without affecting everything else. In the blog example, it is possible to change the mail class by
replacing it with another library. With modularity, this can be done even though the user class
depends on the mail class for sending emails to users of the blog. Each of the classes is treated
separately.
        </p>
        <p>
            There is no risk of name collisions. This is where more than
one function or variable in the program has the same name. Modularity means that each of these
functions or variables resides in an independent module, so name collisions are not an issue.
        </p>

        
 

        

       
        






    
    <p class="my-5">.</p>
    </div>
</div>


@endsection