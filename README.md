# Yii2 Component for Swagger-UI

##Install
1. The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require  veksa/yii2-swagger-ui "~1.0"
```

or add

```
"veksa/yii2-swagger-ui": "~1.0"
```

to the require section of your `composer.json` file.

## Usage

Once the extension is installed, you can register the Swagger UI assets in your application by doing:

```php
veksa\swagger\yii2\assets\SwaggerUiAsset::register($this);
```

A complete layout structure is available in the `src\views` directory for a complete working Swagger UI interface like their [Pet Store](http://petstore.swagger.io/).
