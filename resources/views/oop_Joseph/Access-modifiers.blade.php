@extends('inc.layout')

@section('content')


<h1 class="mb-4 mt-1 text-primary heding-one">Access modifiers: public vs. private</h1>
<hr id="top-heading">
<div class="row">
    <div class="col-3">
        <ul class="list-group position-fixed" id="sidebar_menu">         
        </ul>
    </div>

    <div class="col-9">
     <h2 class="text-info">How to access a private property</h2>
     <p>
        We saw that we have no access to private properties from outside the class, but we still have to
        somehow set and get the properties’ values. In order to interact with private properties, we use
        public methods because they can interact with both the code outside of the class’s scope as well as
        the code inside the class. The public methods that can interact in this manner are commonly divided
        into two kinds of methods
     </p>
     <ol>
         <li><strong>Setters</strong> that set the values of the private properties.
            • Getters that get the values of the private propertie</li>
            <li><strong>Getters</strong> that get the values of the private properties</li>
     </ol>

     <pre class="bg-dark text-warning pt-4">
        class Car {
            private $model;
            
            
            public function setModel($model)
            {
                $this -> model = $model;
            }

            public function getModel()
            {
                return "The car model is " . $this -> model;
            }
        }  
        
        $mercedes = new Car();
        // Set the car’s model
        $mercedes -> setModel("Mercedes");
        // Get the car’s model
        echo $mercedes -> getModel();
     </pre>
     <hr>

     <h2 class="text-info">Why do we need access modifiers?</h2>
     <p>
        We need access modifiers in order to limit the modifications that code from outside the classes can
        do to the classes’ methods and properties. Once we define a property or method as private, only
        methods that are within the class are allowed to approach it. So, in order to interact with private
        methods and properties, we need to provide public methods. Inside these methods, we can put logic
        that can validate and restrict data that comes from outside the class
     </p>

 

         
        






    
    <p class="my-5">.</p>
    </div>
</div>


@endsection