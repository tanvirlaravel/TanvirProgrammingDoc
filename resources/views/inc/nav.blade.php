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


        <li class="nav-item">
          <a class="nav-link" href="{{ route('defination') }}">defination</a>
        </li>
        
      </ul>
      
     
    </div>
  </nav>

  