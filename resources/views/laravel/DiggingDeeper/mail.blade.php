@extends('inc.layout')

@section('content')

<h2 class="my-4 text-info text-center">Mail</h2>

<div class="row">
    <div class="col-3">
    <div class="nav flex-column nav-pills card" id="v-pills-tab" role="tablist" aria-orientation="vertical">

<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home">Introduction </a>

<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile">Generating Mailables</a>

<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages">Writing Mailables</a>

<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings">Markdown Mailables<span class="badge badge-warning">W</span></a>

<a class="nav-link" data-toggle="pill" href="#Fallback-Routes">Sending Mail</a>

<a class="nav-link" data-toggle="pill" href="#Rate-Limiting">Route Caching <span class="badge badge-warning">W</span></a>


</div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Introduction</h2>
                <ol>
                    <li><a href="">Driver Prerequisites</a></li>
                </ol>
                <hr>
                <p>
                    Laravel provides API over the SwiftMailer library.
                </p>

                <h5><a href="" _target="_blank">drivers</a></h5>
                <ul>
                    <li>SMTP</li>
                    <li>Mailgun</li>
                    <li>Postmark</li>
                    <li>SparkPost</li>
                    <li>Amazon SES</li>
                    <li>sendmail</li>
                </ul>

                <hr>
                <h3>Driver Prerequisites</h3>
                <hr>
                <p>All of the API drivers require the Guzzle HTTP library</p>
                <code>composer require guzzlehttp/guzzle</code>

                <h5>Mailgun Driver</h5>
                <h5>Postmark Driver</h5>
                <h5>SES Driver</h5>

                <br>            <br>
                <a href="https://laravel.com/docs/6.x/mail#driver-prerequisites" target="_blank">Documentation</a>
                <br><br><br>

            </div>

            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Generating Mailables</h2>

                <p>In Laravel, each type of email sent by your application is represented as a <code>"mailable" class</code>. These classes are stored in the app/Mail directory.</p>

                <p><code>php artisan make:mail OrderShipped</code></p>
              
          </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <h2 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Writing Mailables</h2>
                <ol>
                    <li><a href="#ConfiguringTheSender">Configuring The Sender</a></li>
                    <li><a href="#ConfiguringTheView">Configuring The View</a></li>
                    <li><a href="#ViewData">View Data</a></li>
                    <li><a href="#Attachments">Attachments</a></li>
                    <li><a href="#InlineAttachments">Inline Attachments</a></li>
                    <li><a href="#CustomizingTheSwiftMailerMessage">Customizing The Swift Mailer Message</a></li>
                </ol>

                <p>All of a mailable class' configuration is done in the <code>build</code> method. Within this method, you may call various methods such as <code>from</code>, <code>subject</code>, <code>view</code>, and <code>attach</code> to configure the email's presentation and delivery.</p>

                <hr>
                <h3 id="ConfiguringTheSender">Configuring The Sender</h3>
                <hr>

                <h5>Using The <code>from</code> Method</h5>
                <pre class="bg-dark text-warning">

        public function build()
        {
            return $this->from('example@example.com')
                        ->view('emails.orders.shipped');
        }
                </pre>

                <h5>Using A Global <code>from</code> Address</h5>
               <p>However, if your application uses the same "from" address for all of its emails, it can become cumbersome to call the <code>from</code> method in each mailable class you generate. Instead, you may specify a global "from" address in your <code>config/mail.php</code> configuration file. This address will be used if no other "from" address is specified within the mailable class:</p>

               <p><code>'from' => ['address' => 'example@example.com', 'name' => 'App Name'],</code></p>

               <p>In addition, you may define a global "reply_to" address within your <code>config/mail.php</code> configuration file:</p>
               <p><code>'reply_to' => ['address' => 'example@example.com', 'name' => 'App Name'],</code></p>


               <hr>
               <h3 id="ConfiguringTheView">Configuring The View</h3>
               <hr>
               <p><a href="https://laravel.com/docs/6.x/mail#configuring-the-view" target="_blank">Documentation</a></p>


               <hr>
               <h3 id="ViewData">View Data</h3>
               <hr>
               <p><a href="https://laravel.com/docs/6.x/mail#view-data" target="_blank">Documentation</a></p>

                <hr>
               <h3 id="ViewData">Attachments</h3>
               <hr>
               <p><a href="https://laravel.com/docs/6.x/mail#attachments" target="_blank">Attachments</a></p>


               <hr>
               <h3 id="InlineAttachments">Inline Attachments</h3>
               <hr>
               <p><a href="https://laravel.com/docs/6.x/mail#inline-attachments" target="_blank">Documentation</a></p>


                <hr>
               <h3 id="CustomizingTheSwiftMailerMessage">Customizing The SwiftMailer Message</h3>
               <hr>
               <p><a href="https://laravel.com/docs/6.x/mail#customizing-the-swiftmailer-message" target="_blank">Documentation</a></p>


               

            </div>

            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Resource Controllers</h2>
               
               
            </div>

            <div class="tab-pane fade" id="Fallback-Routes">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block"> Sending Mail</h4>
               <ol>
                   <li><a href="#QueueingMail">Queueing Mail</a></li>
               </ol>

               <hr>
               <p>To send a message, use the <code>to</code> method on the <code>Mail</code> facade. The <code>to</code> method accepts an email address, a user instance, or a collection of users. If you pass an object or collection of objects, the mailer will automatically use their <code>email</code> and <code>name</code> properties when setting the email recipients, so make sure these attributes are available on your objects. Once you have specified your recipients, you may pass an instance of your mailable class to the <code>send</code> method:</p>


                <pre class="bg-dark text-warning">

        use Illuminate\Support\Facades\Mail;

        Mail::to($request->user())->send(new OrderShipped($order));
                </pre>  

                <p>You are not limited to just specifying the "to" recipients when sending a message. You are free to set "to", "cc", and "bcc" recipients all within a single, chained method call:</p>  
                 <pre class="bg-dark text-warning">

        Mail::to($request->user())
        ->cc($moreUsers)
        ->bcc($evenMoreUsers)
        ->send(new OrderShipped($order));
                </pre>             

                <hr>
                <h3 id="QueueingMail">Queueing Mail</h3>
                <hr>


            </div>
            <div class="tab-pane fade" id="Rate-Limiting">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2  d-inline-block">Route Caching</h4>
                <br>
                <a href="https://laravel.com/docs/6.x/controllers#route-caching" target="_blank">Document</a>
               

            </div>
           

        </div>
    </div>
</div>

@endsection