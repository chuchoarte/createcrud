# CreateCRUD
El inicio de la automatización de un CRUD en Laravel.
Este paquete le permite construir un CRUD de manera semi-automatica, permitiendo normalizar de una manera mas sencilla todos los CRUD de tu proyecto en Laravel 5.

## Cómo instalar en Laravel 5.x:
Ejecutar el comando composer: `composer require jespitia/createcrud @dev`
agregue el Proveedor de Servicios en `config/app.php` en la sección `provider`
```php
jespitia\createcrud\CreateCRUDServiceProvider::class,
```

## Uso
Vaya a su app local http://myapp.test/artisan-commands
