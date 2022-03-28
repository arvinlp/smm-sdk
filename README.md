
add this to composer.json and run `composer update"`
```
   "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/arvinlp/smm-sdk"
        }
    ],
  "require": {
    ...
    "arvinlp/smm-sdk": "@dev",
     ...
    }
```
``php artisan vendor:publish --provider="Arvinlp\SmmSDK\SmmSDKServiceProvider"
``
and add to .env
```
SMM_SDK_URL=YOURAPIURL
SMM_SDK_KEY=YOURAPIKEY
```
