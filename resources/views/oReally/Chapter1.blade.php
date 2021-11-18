@extends('inc.layout')

@section('content')


<h1 class="my-4 text-info text-center">Chapter 1. Why Laravel?</h1>

<div class="row">
    <div class="col-4">
        <ul class="list-group position-fixed" id="sidebar_menu">         
        </ul>
    </div>

    <div class="col-8">
        <h2 class="text-success">Why Use a Framework?</h2>
        <p>In the early days of the dynamic web, Developers were responsible for writing the code for not just the unique business logic of our applications, but also each of the components that are so common across sites — </p>
        <ol>
            <li>user authentication</li>
            <li>input validation</li>
            <li>database access</li>
            <li>templating</li>
            <li>and more</li>
        </ol>       
         
        <p>Today, programmers have dozens of application development frameworks and thousands of components and libraries easily accessible. I</p>
        <p>With packages, someone else is responsible for developing and maintaining an isolated piece of code that has a well-defined job, and in theory that person has a deeper understanding of this single component than you have time to have.
        </p>
        <p>
        Frameworks like Laravel — and Symfony, Silex, Lumen, and Slim — prepackage a collection of third-party components together with custom framework “glue” like configuration files, service providers, prescribed directory structures, and application bootstraps. So, the benefit of using a framework in general is that someone has made
        decisions not just about individual components for you, but also about how those components should fit together
        </p>
            <hr>

            <h2 class="text-success">I’ll Just Build It Myself</h2>
    <p>
        Let’s say you start a new web app without the benefit of a framework. Where do you begin?
Well, it should probably route HTTP requests, so you now need to evaluate all of the HTTP
request and response libraries available and pick one. Then a router. Oh, and you’ll probably
need to set up some form of routes configuration file. What syntax should it use? Where
should it go? What about controllers? Where do they live, and how are they loaded? Well,
you probably need a dependency injection container to resolve the controllers and their
dependencies. But which one?
    </p>
    <p>
Frameworks address this issue by providing a carefully considered answer to the question
“Which component should we use here?” and ensuring that the particular components chosen
work well together. Additionally, frameworks provide conventions that reduce the amount of
code a developer new to the project has to understand — if you understand how routing
works in one Laravel project, for example, you understand how it works in all Laravel
projects.
    </p>
    <hr>

    <h2 class="text-success">Laravel 4</h2>
    <p>
        With Laravel 4, Taylor rewrote the entire framework from the ground up. By this point
Composer, PHP’s now-ubiquitous package manager, was showing signs of becoming an
industry standard and Taylor saw the value of rewriting the framework as a collection of
components, distributed and bundled together by Composer.
    </p>
    <p>
        Taylor developed a set of components under the code name <strong><code>Illuminate</code></strong> and, in May 2013,
released Laravel 4 with an entirely new structure. Instead of bundling the majority of its code
as a download, Laravel now pulled in the majority of its components from Symfony (another
framework that released its components for use by others) and the Illuminate components
through Composer.
    </p>
    <p>
        Laravel 4 also introduced queues, a mail component, facades, and database seeding. And
because Laravel was now relying on Symfony components, it was announced that Laravel
would be mirroring (not exactly, but soon after) the six-monthly release schedule Symfony
follows
    </p>
    <hr>

    <h2 class="text-success">How Laravel Achieves Developer Happiness</h2>
    <p>Laravel is trying to take the repetitive work out of developers’
        jobs so they can do something unique.</p>
    <ul>
        
        <li>Homestead and Valet for local
            development, 
        </li><li>Forge for server management, and 
        </li><li>Envoyer for advanced deployment.
        </li><li>Cashier for payments and subscriptions, 
        </li><li>Echo for
            WebSockets, 
        </li><li>Scout for search, 
        </li><li>Passport for API authentication, 
        </li><li>Socialite for social login, and
        </li><li>Spark to bootstrap your SaaS. </li>
    </ul>
    <hr>

    <h2 class="text-success">convention over configuration</h2>
    <p>
        — meaning that if you’re willing
to use Laravel’s defaults, you’ll have to do much less work than with other frameworks that
require you to declare all of your settings even if you’re using the recommended
configuration. Projects built on Laravel take less time than those built on most other PHP
frameworks
    </p>
    <p>
        Laravel also focuses deeply on simplicity. It’s possible to use dependency injection and
mocking and the Data Mapper pattern and repositories and Command Query Responsibility
Segregation and all sorts of other more complex architectural patterns with Laravel, if you
want. But while other frameworks might suggest using those tools and structures on every
project, Laravel and its documentation and community lean toward starting with the simplest
possible implementation — a global function here, a facade there, ActiveRecord over there.
This allows developers to create the simplest possible application to solve for their needs.

    </p>
    
    <p class="my-5">.</p>
    





    </div>
</div>


@endsection