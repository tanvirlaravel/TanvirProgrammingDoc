<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('home') }}">Tavnir's Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            PHP
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('php.array.functions') }}">Array Functions</a>
            <a class="dropdown-item" href="{{ route('php.time_date.time_date') }}">Time & Date</a>
            <a class="dropdown-item" href="{{ route('php.definations.definations') }}">Definations of PHP</a>
           
          </div>
        </li>
      
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            HTTP
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('http.others') }}">HTTP Other Info</a>
            <a class="dropdown-item" href="{{ route('http.home') }}">HTTP Home</a>
            <a class="dropdown-item" href="{{ route('http.overview') }}">HTTP Overview</a>
            <a class="dropdown-item" href="{{ route('http.messages') }}">HTTP Messages</a>
            <a class="dropdown-item" href="{{ route('http.requests') }}">HTTP Requests</a>
            <a class="dropdown-item" href="{{ route('http.responses') }}">HTTP Responses</a>
            
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            L Basic
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('laravel.routing') }}">Routing</a>         
            <a class="dropdown-item" href="{{ route('laravel.middleware') }}">Middleware</a>         
            <a class="dropdown-item" href="{{ route('laravel.CSRFProtection') }}">CSRF Protection</a>         
            <a class="dropdown-item" href="{{ route('laravel.controllers') }}">Controllers</a>         
            <a class="dropdown-item" href="{{ route('laravel.requests') }}">Requests</a> 
            <a class="dropdown-item" href="{{ route('laravel.views') }}">Views</a> 
            <a class="dropdown-item" href="{{ route('laravel.session') }}">Session</a>       
            
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            L Database
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            {{-- <a class="dropdown-item" href="{{ route('aa') }}">Getting Started</a>        --}}
            <a class="dropdown-item" href="{{ route('laravel.database.get_started') }}">Getting Started</a>       
            <a class="dropdown-item" href="{{ route('laravel.query_builder') }}">Query Builder</a>       
            
          </div>
        </li>

          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Security
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('laravel.authentication') }}">Authentication</a>     
            
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            L Digging Deeper
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('laravel.mail') }}">Mail</a>     
            
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            L Eloquent
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('laravel.eloquent.getting_started') }}">Getting Started</a>     
            
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            oReally Book's
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('oReally.Chapter1') }}">Chapter 1</a>     
            <a class="dropdown-item" href="{{ route('oReally.Chapter2') }}">Chapter 2</a>     
            <a class="dropdown-item" href="{{ route('oReally.Chapter3') }}">Chapter 3</a>     
            <a class="dropdown-item" href="{{ route('oReally.Chapter5') }}">Chapter 5</a>     
            
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            OOP Joseph
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('oop.Introduction') }}">Introduction</a>     
            <a class="dropdown-item" href="{{ route('oop.create-classes-objects') }}">How to create classes and objects?</a>     
            <a class="dropdown-item" href="{{ route('oop.this-keyword') }}">The $this keyword</a>     
            <a class="dropdown-item" href="{{ route('oop.Chaining-methods-propertie') }}">Chaining methods and propertie</a>     
            <a class="dropdown-item" href="{{ route('oop.Access-modifiers') }}">Access modifiers: public vs. private</a>     
            <a class="dropdown-item" href="{{ route('oop.Magic-methods-constants') }}">Magic methods and constants unveiled</a>     
            <a class="dropdown-item" href="{{ route('oop.Inheritance') }}">Inheritance in object oriented programming</a>     
            <a class="dropdown-item" href="{{ route('oop.Abstract-classes') }}">Abstract classes and methods</a>     
            <a class="dropdown-item" href="{{ route('oop.Interfaces') }}">Interfaces - the next level of  abstraction</a>     
               
            
          </div>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="{{ route('defination') }}">defination</a>
        </li>
        
      </ul>
      
     
    </div>
  </nav>

  