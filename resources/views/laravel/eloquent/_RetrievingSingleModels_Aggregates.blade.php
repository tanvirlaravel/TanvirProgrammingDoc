<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
    <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Retrieving Single Models / Aggregates</h2>
   
    <ol>
        <li><a href="#RetrievingAggregates">Retrieving Aggregates</a></li>
    </ol>

    <pre class="bg-dark text-warning">

    // Retrieve a model by its primary key...
    $flight = App\Flight::find(1);

    // Retrieve the first model matching the query constraints...
    $flight = App\Flight::where('active', 1)->first();

    // Shorthand for retrieving the first model matching the query constraints...
    $flight = App\Flight::firstWhere('active', 1);

    $flights = App\Flight::find([1, 2, 3]);
    </pre>

    <h4>Not Found Exceptions</h4>
    <p>if no result is found, a <code>Illuminate\Database\Eloquent\ModelNotFoundException</code> will be thrown:</p>
    <pre class="bg-dark text-warning">

    $model = App\Flight::findOrFail(1);

    $model = App\Flight::where('legs', '>', 100)->firstOrFail();
    </pre>
    <p>If the exception is not caught, a <code>404</code> HTTP response is automatically sent back to the user</p>

    <hr>
    <h2 id="RetrievingAggregates">Retrieving Aggregates</h2>
    <hr>
    <p><code>count, sum, max</code></p>
    <pre class="bg-dark text-warning">

$count = App\Flight::where('active', 1)->count();

$max = App\Flight::where('active', 1)->max('price');
    </pre>
   
</div>