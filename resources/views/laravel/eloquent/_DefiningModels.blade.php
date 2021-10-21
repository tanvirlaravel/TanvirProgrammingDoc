<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
    <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Defining Models</h2>
    <ol>
        <li><a href="#EloquentModelConventions">Eloquent Model Conventions</a></li>
        <li><a href="#DefaultAttributeValues">Default Attribute Values</a></li>
    </ol>
    
   <hr>
   <h3 id="EloquentModelConventions">Eloquent Model Conventions</h3>
   <hr>
   <h5>Table Names</h5>
               <p>Eloquent will also assume that each table has a primary key column named <code>id</code>.</p>
               <pre class="bg-dark text-warning">
                   
    class Flight extends Model
    {        
        protected $primaryKey = 'flight_id';
    }
               </pre>

               <p>In addition, Eloquent assumes that the primary key is an incrementing integer value, which means that by default the primary key will automatically be cast to an <code>int</code>. If you wish to use a non-incrementing or a non-numeric primary key you must set the public <code>$incrementing</code> property on your model to <code>false</code>:</p>
               <pre class="bg-dark text-warning">
                   
    class Flight extends Model
    {        
        public $incrementing = false;
    }
               </pre>

              <p>If your primary key is not an integer, you should set the protected $keyType property on your model to string:</p>
               <pre class="bg-dark text-warning">
                   
    class Flight extends Model
    {        
        protected $keyType = 'string';
    }
               </pre>

               <h5>Timestamps</h5>
              <p>By default, Eloquent expects <code>created_at</code> and <code>updated_at</code> columns to exist on your tables. If you do not wish to have these columns automatically managed by Eloquent, set the <code>$timestamps</code> property on your model to <code>false</code>:</p>
               <pre class="bg-dark text-warning">
                   
    class Flight extends Model
    {        
        public $timestamps = false;
    }
               </pre>

               <p>If you need to customize the names of the columns used to store the timestamps, you may set the <code>CREATED_AT</code> and <code>UPDATED_AT</code> constants in your model:</p>
               <pre class="bg-dark text-warning">
                   
    class Flight extends Model
    {        
        const CREATED_AT = 'creation_date';
        const UPDATED_AT = 'last_update';
    }
               </pre>

               <p>If you need to customize the format of your timestamps, set the $dateFormat property on your model. This property determines how date attributes are stored in the database, as well as their format when the model is serialized to an array or JSON:</p>
               <pre class="bg-dark text-warning">
                   
    class Flight extends Model
    {        
        protected $dateFormat = 'U';
    }
               </pre>

               <h5>Database Connection</h5>
              <p>By default, all Eloquent models will use the default database connection configured for your application. If you would like to specify a different connection for the model, use the <code>$connection</code> property:</p>
               <pre class="bg-dark text-warning">
                   
    class Flight extends Model
    {        
        protected $connection = 'connection-name';
    }
               </pre>

   <hr>
   <h3 id="DefaultAttributeValues">Default Attribute Values</h3>
   <hr>
   <p>If you would like to define the default values for some of your model's attributes, you may define an <code>$attributes</code> property on your model:</p>
   <pre class="bg-dark text-warning">
                   
    class Flight extends Model
    {        
        protected $attributes = [
            'delayed' => false,
        ];
    }
               </pre>
    

</div>