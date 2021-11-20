@extends('inc.layout')

@section('content')

<div class="row">
    <div class="col">
    <h1 class="mb-4 mt-1 text-primary heding-one">D</h1>
    <hr id="top-heading">
    </div>
</div>

<div class="row">

    <div class="col-3">
            <ul class="list-group position-fixed" id="sidebar_menu">         
            </ul>
        </div>

            <div class="col-md-9">
                <h2>Dependency Injection</h2>
                <p>Dependency injection is a procedure where one object supplies the dependencies of another object.</p>
                <p>The dependencies can be changed at run time as well as compile time</p>

            <ul>
                <li><b>Modular:</b> The Dependency Injection helps create completely self-sufficient classes or modules</li>
                <li><b>Testable:</b>It helps write testable code easily eg unit tests for example</li>
                <li><b>Maintainable:</b> Since each class becomes modular, it becomes easier to manage it</li>
            </ul>
            <hr>


            <h2>Declarative programming</h2>
            <pre class="px-3">

            Here's an example.

            In CSS (used to style HTML pages), if you want an image element to be 100 pixels high and 100 
            pixels wide, you simply "declare" that that's what you want as follows:

            #myImageId {
            height: 100px;
            width: 100px;
            }

            You can consider CSS a declarative "style sheet" language.

            The browser engine that reads and interprets this CSS is free to make the image appear
            this tall and this wide however it wants. Different browser engines (e.g., the engine 
            for IE, the engine for Chrome) will implement this task differently.

            Their unique implementations are, of course, NOT written in a declarative language but in
            a procedural one like Assembly, C, C++, Java, JavaScript, or Python. That code is a bunch
            of steps to be carried out step by step (and might include function calls). It might do
            things like interpolate pixel values, and render on the screen.
            </pre>
            <hr>

            <h2>Driver (Software)</h2>
            <p>A software driver is <code>a type of software program</code> that controls a hardware device. On any computer, smartphone, tablet, different hardware components that are part of the computer and attached devices need to communicate with each other for a computer to function and work.</p>

            <p>suppose an application needs to read some data from a device. The application calls a function implemented by the operating system, and the operating system calls a function implemented by the driver. The driver, which was written by the same company that designed and manufactured the device, knows how to communicate with the device hardware to get the data. After the driver gets the data from the device, it returns the data to the operating system, which returns it to the application.</p>
            <img src="/img/definations/whatisadriver01.png">

            <h5>Software drivers</h5>
            <p>suppose you need to write a tool that has access to core operating system data structures, which can be accessed only by code running in kernel mode. You can do that by splitting the tool into two components. The first component runs in user mode and presents the user interface. The second component runs in kernel mode and has access to the core operating system data. The component that runs in user mode is called an application, and the component that runs in kernel mode is called a software driver. A software driver is not associated with a hardware device.</p>
            <img src="{{  asset('img/definations/whatisadriver03.png') }}">
               
            
            <p class="py-5">.</p>
            </div>
</div>
@endsection