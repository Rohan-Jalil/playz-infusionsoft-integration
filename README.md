# playz-infusionsoft-integration

## Installation


 * In order to install the package use the following command 

```json
"composer require contrive/playz-infusionsoft-integration"
```

 * Open your `config/app.php` and add the following to the `providers` array:
```php
Agencymates\Playz\PlayzServiceProvider::class,
```

 * Run the command below to publish the package config file `config/entrust.php`:
 ```shell
 php artisan vendor:publish
 ```