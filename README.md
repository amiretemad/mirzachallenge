This Project Related to Mirza Group.

<h1>Installation instructions</h1>

At the first please change directory to laravel path and then execute these commands ! 


``` composer require amiretemad/mirzachallenge dev-master ```

Step One, add the service provider to config/app.php.

```
'providers' => [
    //..
    'amiretemad\mirzachallenge\mirzaChallangeServiceProvider::class',
]
```
Step Two, Please add this to your laravel's main composer.json

```
"autoload": {
        "psr-4": {
            "amiretemad\\mirzachallenge\\": "vendor/amiretemad/mirzachallenge/src"
        }
    }
 ```
 
At the end run this command at laravel main root
composer dump-autoload 

That's it ! now you can access to mirzaChallange package By typing in address bar 
eg : http://localhost/laravel/mirzaChallange
