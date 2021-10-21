<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
    <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Retrieving Models</h2>

    <ol>
        <li><a href="#Collections">Collections</a></li>
        <li><a href="#ChunkingResults">Chunking Results</a></li>
        <li><a href="#AdvancedSubqueries">Advanced Subqueries</a></li>
    </ol>

    <p>Think of each Eloquent model as a powerful query builder allowing you to fluently query the database table associated with the mode</p>
    <p>Since Eloquent models are query builders, you should review all of the methods available on the <code>query builder</code>. </p>

    <h4>Refreshing Models</h4>
    <p>Methods : <code> fresh </code> <code>refresh</code></p>
    <p>The <code>fresh</code> method will re-retrieve the model from the database. The existing model instance will not be affected:</p>
    <pre class="bg-dark text-warning">

    $flight = App\Flight::where('number', 'FR 900')->first();

    $freshFlight = $flight->fresh();
    </pre>

    <p>The <code>refresh</code> method will re-hydrate the existing model using fresh data from the database. In addition, all of its loaded relationships will be refreshed as well:</p>
    <pre class="bg-dark text-warning">

    $flight = App\Flight::where('number', 'FR 900')->first();

    $flight->number = 'FR 456';

    $flight->refresh();

    $flight->number; // "FR 900"
    </pre>
    
    <hr>
    <h2 id="Collections">Collections</h2>
    <hr>
    <p>For Eloquent methods like <code>all</code> and <code>get</code> which retrieve multiple results, an instance of <code>Illuminate\Database\Eloquent\Collection</code> will be returned. The <code>Collection</code> class provides a <code>variety of helpful methods</code> for working with your Eloquent results:</p>

    <hr>
    <h2 id="ChunkingResults">Chunking Results</h2>
    <hr>
    <h4>Later</h4>

    <hr>
    <h2 id="AdvancedSubqueries">Advanced Subqueries</h2>
    <hr>
    <h4>Later</h4>
   
</div>