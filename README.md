# IS_601_FAQ_PROJECT_FINAL
<h1> Introduction of HoneyPot(Google ReCaptcha)</h1>
<p> Honeypot or ReCaptcha is a service that prevents your site from spam and abuse</p>
<p> It verifies that the computer user is human and not a robot </p>

<h2> User_Story_1: Installation for Google ReCaptcha
<p> Install composer. Write in the terminal composer require google/recaptcha "~1.1" </p>

<h2> User_Story_2: Create your own Google ReCaptcha API
<p> Go to https://google.com/recaptcha/admin#list </p>
<p> Click on " Register a New Site " </p>
<p> Add label and choose the type ReCaptcha V2 </p>
<p> Add the domain (Localhost/herokuapp) </p>
<p> Click on Register </p>
<p> You will be able to see the Site Key and Secret Key </p>

<h2> User_Story_3: Integration Requirements </h2>
<p> Create a Controller and add the secret Key </p>
<h3> Changes needed in app.blade.php <h3>
<li> Recaptcha Link: https://www.google.com/recaptcha/api.js </li>
<li> Bootstrap Link</li>
<li> Jquery Plugins</li>
<p> Add verification form for google recaptcha </p>
<h3> Add Client_side _Integration: by adding site key in register.blade.php </h3>

<h2> User_Story_4: Authentication and Validation </h2>
<p> Run your application on localhost/heroku </p>
<p> You should be able to see the Recaptcha icon on the register page </p>
<h3> Check User Authentication: </h3>
<p> Enter your email address, password, confirm password, name and prefix. When you click on Register button without verifying the recaptcha, you won't be able to register </p>
<p> Enter yourcredentials and click on recaptcha. Verify the Recaptcha("I'm not a robot"), you will be successfully registered and redirected to the next page </p>

<h2> User_Story_5: Feature and Unit Tests </h2>
<p> Create a Feature Test to get the register page url with a status 200 </p>
<p> Create a unit Test to verify the Google Recaptcha </p>
<p> Run phpunit for tests and assertions </p>

<h2> User_Story_6: Heroku Deploy </h2>
<p> Make changes in database.php in config directory to add the heroku details </p>
<p> Add the heroku commands in the terminal </p>
<p> Deploy to Heroku </p>

<h2> Link to Heroku: https://is601final.herokuapp.com/ </h2>
