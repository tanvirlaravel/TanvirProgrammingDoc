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


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Defination
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('definations.a') }}">A</a>     
            <a class="dropdown-item" href="{{ route('definations.b') }}">B</a>  
            <a class="dropdown-item" href="{{ route('definations.c') }}">C</a>     
            <a class="dropdown-item" href="{{ route('definations.d') }}">D</a>     
            <a class="dropdown-item" href="{{ route('definations.e') }}">E</a>     
            <a class="dropdown-item" href="{{ route('definations.f') }}">F</a>     
            <a class="dropdown-item" href="{{ route('definations.g') }}">G</a>     
            <a class="dropdown-item" href="{{ route('definations.h') }}">H</a>     
            <a class="dropdown-item" href="{{ route('definations.i') }}">I</a>     
            <a class="dropdown-item" href="{{ route('definations.j') }}">J</a>     
            <a class="dropdown-item" href="{{ route('definations.k') }}">K</a>     
            <a class="dropdown-item" href="{{ route('definations.l') }}">L</a>     
            <a class="dropdown-item" href="{{ route('definations.m') }}">M</a>     
            <a class="dropdown-item" href="{{ route('definations.n') }}">N</a>     
            <a class="dropdown-item" href="{{ route('definations.o') }}">O</a>     
            <a class="dropdown-item" href="{{ route('definations.p') }}">P</a>     
            <a class="dropdown-item" href="{{ route('definations.q') }}">Q</a>     
            <a class="dropdown-item" href="{{ route('definations.r') }}">R</a>     
            <a class="dropdown-item" href="{{ route('definations.s') }}">S</a>     
            <a class="dropdown-item" href="{{ route('definations.t') }}">T</a>     
            <a class="dropdown-item" href="{{ route('definations.u') }}">U</a>     
            <a class="dropdown-item" href="{{ route('definations.v') }}">V</a>     
            <a class="dropdown-item" href="{{ route('definations.w') }}">W</a>     
            <a class="dropdown-item" href="{{ route('definations.x') }}">X</a>     
            <a class="dropdown-item" href="{{ route('definations.y') }}">Y</a>     
            <a class="dropdown-item" href="{{ route('definations.z') }}">Z</a>     

          </div>
        </li>
        
      </ul>
      
     
    </div>
  </nav>

  