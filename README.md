This Project Related to Mirza Group.

<h1>Installation instructions</h1>

Step One, Please change your current directory to laravel installation path and then run these commands ! 

``` composer require amiretemad/mirzachallenge dev-master ```


Step Two, add the service provider to config/app.php.

```
'providers' => [
    //..
    amiretemad\mirzachallenge\mirzaChallengeServiceProvider::class,
]
```

Step Three, Please add this to your laravel's main composer.json

```
"autoload": {
        "psr-4": {
            "amiretemad\\mirzachallenge\\": "vendor/amiretemad/mirzachallenge/src"
        }
    }
 ```
 
Step Four, run this command at laravel main root <br />

``` 
composer dump-autoload 
```


That's it ! now you can access to mirza challenge package By typing in address bar 

```
http://localhost/laravelInstallationPath/public/mirza
```
</br>
<b>attention : </b>
After install you need to create a new database and set the database connection info in .env file
because i add some records to database.

