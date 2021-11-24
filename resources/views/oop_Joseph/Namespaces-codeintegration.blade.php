@extends('inc.layout')

@section('content')


<h1 class="mb-4 mt-1 text-primary heding-one">Namespaces and code integration</h1>
    <hr id="top-heading">
<div class="row">
    <div class="col-3">
        <ul class="list-group position-fixed" id="sidebar_menu">         
        </ul>
    </div>

    <div class="col-9">
     <h2>Introduction</h2>
     <p>we might encounter some problems when we integrate code from
        different resources. A huge problem, for example, is that of name collision, which occurs when
        different classes have the same name or have the same name for their methods. The problem is
        solved, as of PHP 5.3, by using namespaces</p>
    <p>we call our classes with the same name as our files. This naming  convention would pay off later when we’d like to autoload our classes</p>
     <hr>

        <h2>How to do array type hinting?</h2>
        <pre class="pt-3 bg-dark text-white">
            function functionName (array $argumentName)
            {
                // The code block
            }
        </pre>
        <hr>

        <h2>How to do object type hinting?</h2>
        <pre class="pt-3 bg-dark text-white">
            // The constructor can only get Driver objects as arguments.
            public function __construct(Driver $driver)
            {
                $this -> driver = $driver;
            }
        </pre>
        <hr>

        <h2>Does PHP support type hinting to basic data types?</h2>
        <p>It depends. Whereas PHP5 doesn’t allow type hinting for basic data types (integers, floats, strings and booleans), PHP7 does support scalar type hinting. </p>
        <pre class="pt-3 bg-dark text-white">
            // string type hinting
            public function setModel(string $model)
            {
                $this->model = $model;
            }
            // boolean type hinting
            public function setHasSunRoof(bool $value)
            {
                $this->hasSunRoof = $value;
            }
            // integer type hinting
            public function setNumberOfDoors(int $value)
            {
                $this->numberOfDoors = $value;
            }
            // float type hinting
            public function setPrice(float $value)
            {
                $this->price = $value;
            }
        </pre>

         
        






    
    <p class="my-5">.</p>
    </div>
</div>


@endsection