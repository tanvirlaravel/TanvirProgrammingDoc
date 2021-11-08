<div class="tab-pane fade show active" id="W3Schools">
    <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">W3Schools</h4>
    <p>The PHP date() function is used to format a date and/or a time.</p>
    <p><code>date("Y-m-d") date("h:i:sa")</code></p>

    <hr>
    <h3>Get Your Time Zone</h3>
    <hr>
    <p>If the time you got back from the code is not correct, it's probably because your server is in another country or set up for a different timezone.</p>
    <p><code>date_default_timezone_set("Asia/Dhaka");</code></p>
    <p><a href="https://www.php.net/manual/en/timezones.asia.php" target="_blank">Time zone link</a></p>

    <hr>
    <h3>Create a Date With mktime()</h3>
    <hr>
    <p><code>mktime(hour, minute, second, month, day, year) : (int) Unix timestamp</code></p>
    <p>The Unix timestamp contains the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT)</p>
    <p><code>
        $d=mktime(11, 14, 54, 8, 12, 2014);<br>
        date("Y-m-d h:i:sa", $d);
    </code></p>


    <hr>
    <h3>Create a Date From a String With strtotime()</h3>
    <hr>
    <p>The PHP strtotime() function is used to convert a human readable date string into a Unix timestamp</p>
    <p><code>
        strtotime(time, now) <br>
        $d=strtotime("10:30pm April 15 2014");<br>
        echo "Created date is " . date("Y-m-d h:i:sa", $d);    
    </code></p>

    <hr>
    <h3>Some Code</h3>
    <hr>
    <pre class="text-warning p-5 bg-dark">
        strtotime("tomorrow");
        strtotime("next Saturday");
        strtotime("+3 Months");

        $startdate = strtotime("Saturday");
        $enddate = strtotime("+6 weeks", $startdate);

        $d1=strtotime("July 04");
        $d2=ceil(($d1-time())/60/60/24);
        echo "There are " . $d2 ." days until 4th of July.";
    </pre>
   


</div>