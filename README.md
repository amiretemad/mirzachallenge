This Project Related to Mirza Group.

<h1>Installation instructions</h1>

Step One, Please change your current directory to laravel installation path and then run these commands ! 

``` composer require amiretemad/mirzachallenge dev-master ```


Step Two, add the service provider to config/app.php.

```
'providers' => [
    //..
    'amiretemad\mirzachallenge\mirzaChallangeServiceProvider::class',
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
 
At the end run this command at laravel main root
composer dump-autoload 

That's it ! now you can access to mirzaChallange package By typing in address bar 
eg : http://localhost/laravel/mirzaChallange
